<?php

/**
 * @author ManueldG
 *
 */
class Shop extends PrezzoFinale {
    protected  $id;
    protected  $articolo;
    protected  $tipo;
    protected  $prezzo;
    protected  $descrizione;
    protected  $percSconto;    
    protected  $iva;
    protected  $qta;
    protected  $categoria;  

    public function __construct($articolo,$cat){
        $this->articolo = $articolo;
        $this->tipo = '';
        $this->prezzo = 0;
        $this->categoria= $cat;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getArticolo()
    {
        return $this->articolo;
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
     * @return mixed
     */
    public function getPercSconto()
    {
        return $this->percSconto;
    }

    /**
     * @return mixed
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * @return mixed
     */
    public function getQta()
    {
        return $this->qta;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $articolo
     */
    public function setArticolo($articolo)
    {
        $this->articolo = $articolo;
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

    /**
     * @param mixed $percSconto
     */
    public function setPercSconto($percSconto)
    {
        $this->percSconto = $percSconto;
    }

    /**
     * @param mixed $iva
     */
    public function setIva($iva)
    {
        $this->iva = $iva;
    }

    /**
     * @param mixed $qta
     */
    public function setQta($qta)
    {
        $this->qta = $qta;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
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