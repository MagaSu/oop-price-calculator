<?php
require '../controller/connection.php';

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($product, $conn) {
        $query = 'SELECT * FROM product
                  WHERE ID =' . $product;

        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)) {
            while($row = mysqli_fetch_array($result)) {
                $this->id = $row['id'];
                $this->name = $row['name'];
                $this->price = $row['price'];
            }
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price / 100;
    }
}