<?php
require '../controller/connection.php';

class Customer {
    private $id;
    private $fname;
    private $lname;
    private $group_id;
    private $fixed_discount;
    private $variable_discount;


    public function __construct($customer, $conn) {
        $query = 'SELECT * FROM customer
                  WHERE ID =' . $customer;

        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)) {
            while($row = mysqli_fetch_array($result)) {
                $this->id = $row['id'];
                $this->fname = $row['firstname'];
                $this->lname = $row['lastname'];
                $this->group_id = $row['group_id'];
                $this->fixed_discount = $row['fixed_discount'];
                $this->variable_discount = $row['variable_discount'];
            }
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getFname() {
        return $this->fname;
    }

    public function getLname() {
        return $this->lname;
    }

    public function getGroup_id() {
        return $this->group_id;;
    }

    public function getFixed_discount() {
        return $this->fixed_discount;
    }
    
    public function getVariable_discount() {
        return $this->variable_discount;
    }


}