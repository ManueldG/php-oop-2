<?php

interface Metod{
    
    /** Il prezzo finale è dato dal valore netto + l'iva - lo sconto */
    public function prezzoFinale();
    /** Visualizzazione delle informazioni essenziali del prodotto */
    public function visualizzaProdotto();
}

