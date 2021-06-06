<?php
class Toys extends Shop {
    protected $material;
    public $arg;
    public $x;
    
    public function __construct($art) {
        
        parent::__construct($art);
        $this->arg='ciao';
        $this->x = new Shop($art);
        $this->x->categoria = $art;
        }
    

    
    
    
    
}