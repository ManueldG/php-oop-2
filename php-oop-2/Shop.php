<?php

/**
 * @author ManueldG
 *
 */
class Shop extends PrezzoFinale {
    protected  $_id;
    protected  $_tipo;
    protected  $_prezzo;
    protected  $_descrizione;
    protected  $_percSconto;    
    protected  $_iva;
    protected  $_qta;
    protected  $_categoria;  
    
    //public Prodotto( id, descrizione, prezzo, int percSconto, int iva, int qta, Categoria categoria) {
    public function __construct($id,$descrizione,$prezzo,$percSconto,$iva,$qta,$categoria){
        
        $this->_id = $id;
        $this->_descrizione = $descrizione;
        $this->_prezzo = $prezzo;
        $this->_percSconto = $percSconto;
        $this->_iva = $iva;
        $this->_qta = $qta;
        $this->categoria= $categoria;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getArticolo()
    {
        return $this->_articolo;
    }

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->_tipo;
    }

    /**
     * @return string
     */
    public function getPrezzo()
    {
        return $this->_prezzo;
    }

    /**
     * @return string
     */
    public function getDescrizione()
    {
        return $this->_descrizione;
    }

    /**
     * @return mixed
     */
    public function getPercSconto()
    {
        return $this->_percSconto;
    }

    /**
     * @return mixed
     */
    public function getIva()
    {
        return $this->_iva;
    }

    /**
     * @return mixed
     */
    public function getQta()
    {
        return $this->_qta;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->_categoria;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @param mixed $articolo
     */
    public function setArticolo($articolo)
    {
        $this->_articolo = $articolo;
    }

    /**
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->_tipo = $tipo;
    }

    /**
     * @param string $prezzo
     */
    public function setPrezzo($prezzo)
    {
        $this->_prezzo = $prezzo;
    }

    /**
     * @param string $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->_descrizione = $descrizione;
    }

    /**
     * @param mixed $percSconto
     */
    public function setPercSconto($percSconto)
    {
        $this->_percSconto = $percSconto;
    }

    /**
     * @param mixed $iva
     */
    public function setIva($iva)
    {
        $this->_iva = $iva;
    }

    /**
     * @param mixed $qta
     */
    public function setQta($qta)
    {
        $this->_qta = $qta;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->_categoria = $categoria;
    }
    
    public function visualizzaProdotto() {
        return ("Prodotto\nCodice: ".$this->getId()." Titolo: ".$this->getDescrizione()."  Quantità: ".$this->getQta()." Categoria: ".$this->getCategoria()." Prezzo: ".$this->prezzoFinale()." euro");
            
    }
    
    public function prezzoFinale() {
        parent::prezzoFinale();
        //return PrezzoFinale::prezzoFinale();
    }
    
    

    
}

    
?>