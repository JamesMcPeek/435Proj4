<?php
require_once dirname(dirname(__FILE__)).'/__con.php';
session_start();
/*
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';
$db_con = new mysqli($servername, $username, $password, $dbname);
*/

if($db_con->connect_error) {
    die('Connection Failed: ' . $db_con->connect_error);
}

if(isset($_POST['submit'])) {
    $username = $_POST['User_name'];
    $password = $_POST['User_pass'];
    $first_name = $_POST['User_firstname'];
    $last_name = $_POST['User_lastname'];
    $email = $_POST['User_email'];

    

    $sql = "INSERT INTO users (username, pw, email, first_name, last_name) 
        VALUES ('$username ', '$password', '$email', '$first_name', '$last_name')";
    if ($db_con->query($sql) === TRUE) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        header("Location: ../dashboard.php");

        
    } else {
        echo "Error: " . $sql . "<br>" . $db_con->error;
    }
} else {
    echo 'Something Went Wrong!';
}

$db_con->close();


