<?php
require '../controller/connection.php';

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($productName) {
        $this->name = $productName;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}