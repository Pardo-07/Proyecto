<?php

require_once('config/connection.php');
require_once('controllers/productController.php');

$controller = new productController();
$controller->index();

?>