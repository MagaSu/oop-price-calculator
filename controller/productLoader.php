<?php 
require '../model/product.php';

class ProductLoader {

    public function __construct() {

    }

    public function loadProducts($conn) {
        $prods = [];
        $query = 'SELECT * FROM product';
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)) {
            while($row = mysqli_fetch_array($result)) {
                $prods[] = $row['name'];
            }
        }
        return $prods;
    }
}