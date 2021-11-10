<?php 
require '../model/product.php';
require '../model/customer.php';
require '../model/calculator.php';

class Loader {

    public function __construct() {

    }

    public function loadProducts($conn) {
        $prods = [];
        $query = 'SELECT * FROM product';
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)) {
            while($row = mysqli_fetch_array($result)) {
                $prods[] = array('id'=>$row['id'], 'name'=>$row['name']);
            }
        }
        return $prods;
    }

    public function loadCustomers($conn) {
        $customers = [];
        $query = 'SELECT * FROM customer';
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)) {
            while($row = mysqli_fetch_array($result)) {
                $customers[] = array('id'=>$row['id'], 'firstname'=>$row['firstname']);
            }
        }
        return $customers;
    }

    public function sendProduct($conn) {
        if(isset($_POST['submit'])) {
            $product = $_POST['product'];
            $sendProduct = new product($product, $conn);

            $customer = $_POST['customer'];
            $sendCustomer = new customer($customer, $conn);

            $calculator = new Calculator($sendProduct, $sendCustomer);

            return array('productPrice'=> $sendProduct->getPrice(), 'customerName'=> $sendCustomer->getFname());
        }
    }
}