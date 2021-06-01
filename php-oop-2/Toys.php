<?php
class Toys extends Shop {
    protected $material;
    public function __construct($art) {
        
        parent::__construct($art);
        
        $this->material='';
            
    }
}