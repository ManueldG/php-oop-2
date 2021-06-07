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
$c = new Categoria(1, 'manuali'); //id , categoria
$g = new Categoria(2, 'giochi'); //id , categoria
$libri[] = new Shop(2, 'fai da te', 10.50, 5, 20, 1, $c);
$libri[] = new Shop(3, 'programmazione', 40.50, 10, 20, 1, $c);
$giochi[] = new Shop(6, 'marvel', 10.50, 5, 20, 1, $g);


var_dump($libri);
var_dump($giochi);

$carr = new Carrello();

 
 
 
 echo("Aggiungo i prodotti ");
 $carr->aggiungiProdotto($giochi[0]);
 $carr->aggiungiProdotto($giochi[0]);
 
 var_dump($carr);

 
 

