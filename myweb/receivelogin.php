<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> ยินดีต้อนรับ </h1>
    
    
        <?php
            $showuser = $_POST['user'];
            echo "Welcome to cs supermarket websit: $showuser";
        ?> 
   <form action="shopping.html">
    shopping click here! <input type="submit" name="shop" value="shopping here!">
</form>

</body>
</html>



