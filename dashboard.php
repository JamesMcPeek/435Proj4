<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>


<body>
    <?php
    
    if($_SESSION && $_SESSION['username']) {
        ?>
        <div>
            <p>Username: <?=$_SESSION['username']?></p>
            <p>Email: <?=$_SESSION['email']?></p>
            <p>First name: <?=$_SESSION['first_name']?></p>
            <p>Last name: <?=$_SESSION['last_name']?></p>
        </div>
        <?php
    }
    ?>
    <div>
        <a href="./_index.php">Login</a>
    </div>
    <div>
        <a href="./registration.html">Register</a>
    </div>
</body>
</html>
 

