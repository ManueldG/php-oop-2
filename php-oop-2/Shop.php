<?php

/**
 * @author ManueldG
 *
 */
class Shop{
    
    protected  $articolo;
    protected  $tipo;
    protected  $prezzo;
    protected  $descrizione;
    
    

    public function __construct($articolo){
        $this->articolo = $articolo;
        $this->tipo = '';
        $this->prezzo = '';
        $this->descrizione= '';
       
        
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
    
    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    
    /**
     * @return string
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }
    
    /**
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }
    
    /**
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    
    /**
     * @param string $prezzo
     */
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }
    
    /**
     * @param string $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }
    
    
    
}

    class Toys extends Shop {
        protected $material;
        function __construct($art) {
            parent::__construct($art){
                $this->articolo=$material;
                
            }
        }    
    

