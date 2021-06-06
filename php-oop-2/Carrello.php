<?php

/** 
 * @author ManueldG
 * 
 */
class Carrello
{
    private $_prodotti=[];
    private $_numProdotti = 0;
    private $_totale;
    

    /**
     */
    public function __construct(){
        $this->_totale = 0;
    }
    
    public function aggiungiProdotto($p) {
        if (p==null)
            return;
            
            // ricerca del prodotto p
            $i = cercaProdotto2($p);
            
            if ($i==-1) {
                // non c'è il prodotto quindi si può aggiungere
                $_prodotti[]=$p;
                $this->_numProdotti++;
            } else {
                $_prodotti[i]->setQta($_prodotti[i]->getQta()+1);
                // Il prodotto esiste già nel carrello. Incremento la quantità di 1
            }
    } // fine aggiungiProdotto
    
    public function mostraCarrello() {
        if ($this->eVuoto())
            echo("Il carrello è vuoto");
            else
                echo($this->datiCarrello());
    }
    
    /** Conteggio dei prodotti inseriti nel carrello */
    public function getNumProdotti() {
        return $_numProdotti;
    }
    public function eVuoto() {
        return (!empty($this->_prodotti));
    }
    
    
    public function datiCarrello() {
        if (!$this->eVuoto()) {
             $s="Carrello: \n";
            if ($this->_numProdotti>1)
                $s=$s."Nel carrello ci sono ".$this->_numProdotti." prodotti\n";
                else
                    $s=$s."Nel carrello c'è ".$this->_numProdotti." prodotto\n";
                    
                    foreach ( $this->_prodotti as $p)
                        $s=$s.p.visualizzaProdotto()."\n";
                        
                        $s = $s.("Totale carrello: {$this->getTotale()} euro");
                        return $s;
        } else
            return null;
    } // fine metodo datiCarrello
    
    public function getTotale() {
        $totale = 0;
        foreach  ($this->_prodotti as $p) {
            $totale = $totale + $p->prezzoFinale();
        }
        return $totale;
    }
    
    
}

