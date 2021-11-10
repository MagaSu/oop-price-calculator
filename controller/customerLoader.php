<?php 
require '../model/customer.php';

class CustomerLoader {

    public function __construct() {

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

    public function sendCustomer($conn) {
        if(isset($_POST['submit'])) {
            $customer = $_POST['customer'];
            $sendCustomer = new customer($customer, $conn);
            return $sendCustomer->getFname();
        }

    }
}