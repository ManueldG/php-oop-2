<?php

/** 
 * @author ManueldG
 * 
 */
class Categoria
{
    private $idCategoria;
    private $descrizione;

    /**
     */
    public function __construct($idCategoria, $descrizione){
        $this->idCategoria = $idCategoria;
        $this->descrizione = $descrizione;
    }
    /**
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * @return mixed
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * @param mixed $idCategoria
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }

    /**
     * @param mixed $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    
}

