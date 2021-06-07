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
        if ($p==null)
            return;            
            // ricerca del prodotto $p
            $i = $this->cercaProdotto2($p);         
            echo(" i ".$i);
            if ($i==-1) {
                // non c'è il prodotto quindi si può aggiungere
                $this->_prodotti[]=$p;
                $this->_numProdotti++;
                echo ("\nnumero prodotti\n");
                var_dump($this->_prodotti);
                
            } else {            
                try {
                    //var_dump( $this->_prodotti[$i]->setQta($this->_prodotti[$i]->getQta()+1));
                    
                    
                } catch (Exception $e) {
                    echo ("\nerrore ".$e);
                }          
                
                
                
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
        return $this->_numProdotti;
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
                        $s=$s.$p.visualizzaProdotto()."\n";
                        
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
    public function cercaProdotto($idProdotto) {
        for ( $i=0; $i<getNumProdotti(); $i++)
            if ($idProdotto===($this->_prodotti[i]->getIdProdotto()))
                return i;
                return -1;
    }
    
    public function cercaProdotto2($p) { 
        
            echo ("valore");
            var_dump($this->_prodotti);
            if ($p==$this->_prodotti)
                return 0;
            else 
                return (-1);
               
    }
    
    
}

