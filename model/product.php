<?php
require '../controller/connection.php';

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($conn) {
        $query = 'SELECT * FROM product';
        if($result = mysqli_query($conn, $query)){
            if(mysqli_num_rows($result)) {
                while($row = mysqli_fetch_array($result)) {
                ?>
                    <option> <?php echo $row['name'] ?> </option>;
                <?php
                }
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
        return $this->price;
    }
}