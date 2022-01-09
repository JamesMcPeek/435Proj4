<?php
require_once dirname(dirname(__FILE__)).'/__con.php';
//die();
/*
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';
$db_con = new mysqli($servername, $username, $password, $dbname);
*/
session_start();

if($db_con->connect_error) {
    die('Connection Failed: ' . $db_con->connect_error);
}

if($_POST) {
    $username = $_POST['username'];
    $password = $_POST['pw'];

    $sql = "SELECT * FROM users WHERE username = '". $username ."' and pw = '". $password ."'";
    $result = $db_con->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        header('Location: ../home.php');
    } else {
        echo "Username or password Incorrect!";
    }
} else {
    echo 'Something Went Wrong!';
}

$db_con->close();


