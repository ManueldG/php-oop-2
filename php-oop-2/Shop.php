<?php

/**
 * @author ManueldG
 *
 */
class Shop{
    
    protected  $articolo;
    
    public function __construct()
    {
        
    }

    /**
     * @return mixed
     */
    public function getArticolo()
    {
        return $this->articolo;
    }

    /**
     * @param mixed $articolo
     */
    public function setArticolo($articolo)
    {
        $this->articolo = $articolo;
    }

    
}

