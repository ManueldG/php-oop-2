<?php
class Toys extends Shop implements Inew {
    protected $material;
    protected $arg;
    public function __construct($art) {
        
        parent::__construct($art);
        
        $this->material='';   
    }
    
    public function valid($arg)
    {
        $this->arg = $arg;        
    }
    
    
}