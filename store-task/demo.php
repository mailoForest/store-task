<?php

use Product\Product;
use Product\Bundle;
require_once 'autoload.php';

$vaflaMura = new Product("vafla mura", '0.4', 100);

$bread = new Product('bread', 1, 20);
$milk = new Product('milk', 2, 50);
$sugar = new Product('sugar',1.5, 100);


$vaflaMura->sell(10);
$vaflaMura->load(5);


$popara = new Bundle('popara', 1);
$popara->addProductToBundle($bread, 1);
$popara->addProductToBundle($milk, 0.5);

var_dump($popara);