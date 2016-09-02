<?php

use Product\Product;
use Product\Bundle;
require_once 'autoload.php';

$vaflaMura = new Product("vafla mura", 0.4, 100);
$biskviti = new Product("biskviti", 1.4, 80);

$bread = new Product('bread', 1, 20);
$milk = new Product('milk', 2, 50);
$sugar = new Product('sugar',1.5, 100);


$vaflaMura->sell(10);
$vaflaMura->load(5);


$popara = new Bundle('popara', 5);
$popara->addProduct($bread, 1);
$popara->addProduct($milk, 1);
$popara->addProduct($sugar, 0.5);

$zakuska = new Bundle('zakuska', 3);
$zakuska->addProduct($biskviti, 1);
$zakuska->addProduct($milk, 1);

$naslada = new Bundle('naslada', 5);
$naslada->addProduct($vaflaMura, 3);
$naslada->addProduct($biskviti, 2);
$naslada->addProduct($sugar, 1);

var_dump($popara); var_dump($zakuska); var_dump($naslada);
