<?php

/** 
 * @author ManueldG
 * 
 */
class Carrello
{
    private $_list=[];
    private static $_numProdotti = 0;
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
}

