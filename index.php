<?php

require 'vendor/autoload.php';

require 'controllers/ProductController.php';

$productController = new ProductController();

Flight::route('/', array($productController,'index'));
// Flight::route('/product/@id', array($productController,'show'));
// Flight::route('/product/@id/checkout', array($productController,'checkout'));
// Flight::route('/product/@id/checkout/success', array($productController,'success'));
// Flight::route('/product/@id/checkout/cancel', array($productController,'cancel'));


Flight::start();
