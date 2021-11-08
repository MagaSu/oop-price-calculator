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
    </style>
</head>
<body>
    <br>
<form method='POST'>
<span class="custom-dropdown big">
    <select name='customer'>
        <option>Customer</option>
        <option>The Great Gatsby</option>  
        <option>V for Vendetta</option>
        <option>The Wolf of Wallstreet</option>
        <option>Quantum of Solace</option>
    </select>
</span>
<span class="custom-dropdown big">
    <select name='product'>
        <option>Product</option>
        <option>Sherlock Holmes</option>
        <option>The Great Gatsby</option>  
        <option>V for Vendetta</option>
        <option>The Wolf of Wallstreet</option>
        <option>Quantum of Solace</option>
    </select>
</span>
<br><br>
<input type="submit" class='send' value='Calculate'>
    </form>
</body>
</html>