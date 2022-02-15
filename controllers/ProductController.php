<?php 

class ProductController{
    public function index(){
        //$products = R::findAll('products');
        Flight::render('home.php');
    }
    //,['products' => $products]
}