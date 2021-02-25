<?php
class API extends Controller
{

    private $productModel;

    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function index()
    {
        echo 'index in api';
    }

    public function filterProducts()
    {
        
        $data = $_POST;
        $products = $this->productModel->getFilteredProducts($data);
        $backData = $products;
    
        header('Content-Type: application/json; charset=utf8');
        echo  json_encode($backData);
    }
}
