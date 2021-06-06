<?php

abstract class PrezzoFinale implements Metod{

    public function __construct()
    {}

    public function prezzoFinale(){
        return $this->getPrezzo()*$this->getQta()+($this->getPrezzo()*$this->getQta()*$this->getIva())/100 - ($this->getPrezzo()*$this->getQta()*$this->getPercSconto())/100;
    }
    public abstract function visualizzaProdotto();
    
}

