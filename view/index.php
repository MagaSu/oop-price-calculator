<?php
require '../controller/connection.php';
require '../controller/loader.php';
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
        $loader = new loader;
        $loader->loadCustomers($conn);
        
            foreach($loader->loadCustomers($conn) as $customer) {
    ?>
            <option value=<?php echo $customer['id'] ?>> <?php echo $customer['firstname'] ?> </option>;
    <?php
        }
    ?>    
    </select>
</span>
<span class="custom-dropdown big">
    
    <select name='product'>
        <?php 
        $loader->loadProducts($conn);
        
            foreach($loader->loadProducts($conn) as $product) {
        ?>
            <option value=<?php echo $product['id'] ?>> <?php echo $product['name'] ?> </option>;
        <?php
            }
         ?>
    </select>
</span>
<br><br>
<input type="submit" name='submit' class='send' value='Calculate'>
    </form>
    <div class="container">
        <p>Customer: <?php echo $loader->sendProduct($conn)['customerName'] ?> </p>
        <div>
        <p>Price: €<?php echo $loader->sendProduct($conn)['productPrice'] ?></p>
        </div>
    </div>
</body>
</html>