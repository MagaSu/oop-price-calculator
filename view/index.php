<?php
require '../controller/connection.php';
require '../controller/productLoader.php';
require '../controller/customerLoader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            background: #2a2a2b;
            color: #fff;
            text-align: center;
            font-family: Arial, Helvetica;
        }
        .custom-dropdown select {
            background-color: #1abc9c;
            color: #fff;
            font-size: inherit;
            padding: .5em;
            padding-right: 2.5em;	
            border: 0;
            margin: 0;
            border-radius: 3px;
            text-indent: 0.01px;
            text-overflow: '';
            }

        .big {
            font-size: 1.2em;
        }

        .send {
            background-color: #1abc9c;
            color: #fff;
            font-size: inherit;
            padding: .5em;
            width: 200px;
        }

        .container {
            border: 1px solid red;
            width: 500px;
            height: 300px;
            margin: 0 auto;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <br>
<form method='POST'>
<span class="custom-dropdown big">
    <select name='customer'>
    <?php 
        $customersLoader = new customerLoader;
        $customersLoader->loadcustomers($conn);
        
            foreach($customersLoader->loadcustomers($conn) as $customer) {
        ?>
            <option> <?php echo $customer ?> </option>;
        <?php
                }
    ?>    
    </select>
</span>
<span class="custom-dropdown big">
    
    <select name='product'>
        <?php 
        $productLoader = new ProductLoader;
        $productLoader->loadProducts($conn);
        
            foreach($productLoader->loadProducts($conn) as $product) {
        ?>
            <option> <?php echo $product ?> </option>;
        <?php
                }
         ?>
    </select>
</span>
<br><br>
<input type="submit" class='send' value='Calculate'>
    </form>
    <div class="container">
        <p>Customer: XXXX</p>
        <p>Price: XX.XX</p>
    </div>
</body>
</html>