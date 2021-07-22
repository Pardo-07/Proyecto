<?php

    class productController{

        public function index(){
            require_once('models/products.php');
            $products = new Products();
            $data = $products->getProducts();

            require_once('views/products.php');
        }
    }

?>