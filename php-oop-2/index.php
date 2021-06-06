<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL | E_STRICT);

function autoloadClass($className){
    $path=str_replace('\\', '/', $className).'.php';
    if (file_exists($path))
        require_once $path;

};

spl_autoload_register('autoloadClass');
$c = new Categoria(1, 'manuali');
$libri[] = new Shop("manuali");
$libri[] = new Shop("riviste");


var_dump($libri);


$giochi[0] = new Toys("Giochi da giardino");
$giochi[1] = new Toys("Giochi da giardino");
$giochi[2] = new Toys("Giochi ");


$giochi[2]->visualizzaProdotto();

var_dump($giochi);


