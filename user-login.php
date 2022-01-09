<?php
require_once '__con.php';
/*
$servername = 'localhost';
$username = 'id17835359_root';
$password = '?a**=6UEmO+q)#Dq';
$dbname = 'id17835359_sd_project';
$db_con = new mysqli($servername, $username, $password, $dbname);
*/
session_start();

if($db_con->connect_error) {
    die('Connection Failed: ' . $db_con->connect_error);
}

if($_POST) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM users WHERE username = '". $username ."' and pw = '". $password ."'";
    $result = $db_con->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['userid'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name	'] = $user['last_name	'];
        header('Location: ./userlogin.html');
    } else {
        echo "Username or password Incorrect!";
    }
} else {
    echo 'Something Went Wrong!';
}

$db_con->close();
?>

<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {font-family: Arial, Helvetica, sans-serif;}

form {border: 3px solid #f1f1f1;}

 

input[type=text], input[type=password] {

  width: 100%;

  padding: 12px 20px;

  margin: 8px 0;

  display: inline-block;

  border: 1px solid #ccc;

  box-sizing: border-box;

}


button {

  background-color: #04AA6D;

  color: white;

  padding: 14px 20px;

  margin: 8px 0;

  border: none;

  cursor: pointer;

  width: 100%;

}

 

button:hover {

  opacity: 0.8;

}


.imgcontainer {

  text-align: center;

  margin: 24px 0 12px 0;

}

 

img.logo {

  width: 40%;

  border-radius: 50%;

}

 

.container {

  padding: 16px;

}

 

span.psw {

  float: right;

  padding-top: 16px;

}

@media screen and (max-width: 300px) {

  span.psw {

     display: block;

     float: none;

  }

}

</style>

</head>

<body>

<h2>User Login</h2>

 

<form action="" method="post">

  

 

  <div class="container">

    <label for="uname"><b>Username</b></label>

    <input type="text" placeholder="Enter Username" name="uname" required>

 

    <label for="psw"><b>Password</b></label>

    <input type="password" placeholder="Enter Password" name="psw" required>

       

    <button type="submit">Login</button>
    <!-- <button type="submit"  onclick="window.location.href='host'">Host Login</button> -->

    <label>

      <input type="checkbox" checked="checked" name="remember"> Remember me

    </label>

  </div>

</form>
Not yet a Member? <a  href="registration.html">Register</a>

<div>
  <a href="./host-login.php"> Host Login </a>
</div>

</body>

</html>

