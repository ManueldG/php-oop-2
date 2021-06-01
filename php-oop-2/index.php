<?php

require_once "Shop.php";
require_once 'Toys.php';

$libri[] = new Shop("manuali");

var_dump($libri);


$giochi[] = new Toys("Giochi da giardino");

var_dump($giochi);

