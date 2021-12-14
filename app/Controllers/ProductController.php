<?php

include_once "app/Models/ProductModel.php";
class ProductController
{
    protected $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function showAll()
    {
        $products = $this->productModel->getAll();
        include_once "app/Views/products/list.php";
    }

    public function showFormCreate(){
        include_once "app/Views/products/create.php";
    }
    public function create()
    {
        try {
            $this->productModel->store($_REQUEST);
            header("location:index.php?page=product-list");
        }catch (PDOException $e){
            echo ("ERROR".$e->getMessage());
        }
    }
    public function delete()
    {
        if (isset($_REQUEST['id'])){
            $this->productModel->delete($_REQUEST['id']);
            header("location:index.php?page=product-list");
        } else {
            header("location:index.php?page=product-list");
        }
    }
    public function edit()
    {
        if (isset($_REQUEST['id'])){
            $product = $this->productModel->getById($_REQUEST['id']);
            include_once "app/Views/products/update.php";
        }
    }

    public function update()
    {
        if(isset($_REQUEST['id'])) {
            $product = $this->productModel->getById($_REQUEST['id']);
            $this->productModel->update($_REQUEST);
            header("location:index.php?page=product-list");
        }
    }
    public function detail()
    {
        if (isset($_REQUEST['id'])){
            $product = $this->productModel->getById($_REQUEST['id']);
            include_once "app/Views/products/detail.php";
        }
    }
    public function search($request)
    {
        $products = $this->productModel->searchProduct($request["search"]);
        include_once "app/Views/products/list.php";
    }
}