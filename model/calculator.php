<?php 

class Calculator{
    private $selectedCustomer;
    private $selectedProduct;
    
    function __construct($selectedCustomer, $selectedProduct) {
        $this->selectedCustomer = $selectedCustomer;
        $this->selectedProduct = $selectedProduct;
    }

    function calculatePrice() {
        
    }

};