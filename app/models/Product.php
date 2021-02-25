<?php
class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProducts()
    {
        $this->db->query('SELECT * FROM products');

        $products = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {
            return $products;
        }
        return false;
    }


    public function getFilteredProducts($data)
    {
        $statement = '';

        foreach ($data as $key => $value) {

            if (!empty($value)) {

                $parameter = explodeParams($data[$key]);
                if ($key == 'city') {

                    foreach ($parameter as $key => $value) {
                        if ($key > 0) {
                            $statement .= " OR product_location = '$value'";
                        } else {
                            $statement .= prepareSecondStmt($statement);
                            $statement .= "(product_location = '$value'";
                        }
                    }
                    $statement .= ')';
                } elseif ($key == 'nights') {

                    foreach ($parameter as $key => $value) {
                        if ($key > 0) {
                            $statement .= " OR product_duration = $value";
                        } else {
                            $statement .= prepareSecondStmt($statement);
                            $statement .= "(product_duration = $value";
                        }
                    }
                    $statement .= ')';
                } elseif ($key == 'persons') {

                    foreach ($parameter as $key => $value) {
                        if (is_numeric($value)) {
                            $statement .= prepareSecondStmt($statement);
                            $statement .= "(product_participants = $value)";
                        }
                    }
                } elseif ($key == 'price') {

                    foreach ($parameter as $key => $value) {
                        switch (true) {
                            case $value == 1:
                                $price = 'BETWEEN 0 AND 20';
                                break;
                            case $value == 2:
                                $price = 'BETWEEN 20 AND 30';
                                break;
                            case $value == 3:
                                $price = 'BETWEEN 30 AND 40';
                                break;
                            case $value == 4:
                                $price = '>= 40';
                                break;
                        }
                        if ($key > 0) {
                            $statement .= " OR product_price $price";
                        } else {
                            $statement .= prepareSecondStmt($statement);
                            $statement .= "(product_price $price";
                        }
                    }
                    $statement .= ')';
                }
            }
        }
        // return $statement;

        if (!empty($statement)) {
            $this->db->query("SELECT * FROM products WHERE $statement");



            // return $statement;

            $products = $this->db->resultSet();
            return $products;
            if ($this->db->rowCount() > 0) {
                return $products;
            }
            return false;
        } else {
            return $this->getAllProducts();

        }
        //  else {
        //     
        // }
    }
}
