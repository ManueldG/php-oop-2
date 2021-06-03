<?php

//require_once "Shop.php";
//require_once 'Toys.php';

function autoloadClass($className){
    $path=str_replace('\\', '/', $className).'.php';
    if (file_exists($path))
        require_once $path;

};

spl_autoload_register('autoloadClass');

$libri[] = new Shop("manuali");

var_dump($libri);


$giochi[] = new Toys("Giochi da giardino");

var_dump($giochi);

