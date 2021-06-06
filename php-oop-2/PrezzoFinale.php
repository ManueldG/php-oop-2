<?php

abstract class PrezzoFinale implements Metod{

    public function __construct()
    {}

    public function prezzoFinale(){
        return $getPrezzo()*$getQta()+($getPrezzo()*$getQta()*$getIva())/100 - ($getPrezzo()*$getQta()*$getPercSconto())/100;
    }
    public abstract function visualizzaProdotto();
    
}

