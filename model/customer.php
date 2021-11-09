<?php
require '../controller/connection.php';

class Customer {
    private $id;
    private $fname;
    private $lname;
    private $group_id;
    private $fixed_discount;
    private $variable_discount;


    public function __construct($conn) {
        $query = 'SELECT * FROM customer';
        if($result = mysqli_query($conn, $query)){
            if(mysqli_num_rows($result)) {
                while($row = mysqli_fetch_array($result)) {
                ?>
                    <option> <?php echo $row['firstname'] ?> </option>;
                <?php
                }
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