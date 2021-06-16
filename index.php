<?php

//importo le classi nell'index
require_once "./classes/products.php";
require_once "./classes/user.php";

$nameProduct1 = "controller";

$product1 = new Products($nameProduct1);

$product1->setProductDescription("Un controller per il computer");
$product1->setProductPrice("39,99€");
$product1->setProductName("controller");

var_dump($product1);

$user1 = new User()

?>