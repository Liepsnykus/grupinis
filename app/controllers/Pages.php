<?php

class Pages extends Controller
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    public function index()
    {
 
        $products = $this->productModel->getAllProducts();
        $data = [
            'title' => 'Welcome to ' . SITENAME,
            'products' => $products
        ];

        $this->view('pages/index', $data);
    }
}
