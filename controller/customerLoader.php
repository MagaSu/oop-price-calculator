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
                $customers[] = $row['firstname'];
            }
        }
        return $customers;
    }
}