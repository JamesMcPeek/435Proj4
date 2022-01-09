<?php
require_once '__con.php';
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

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];


    //Title
echo "<p align='center'><h2>J.M. Consulting</h2></p>";
echo "<p align='center'><h2>Class Aptitude Test</h2></p>";

// echo <br>
echo "<p>Thank you for your interest in beginning your new, exciting adventure. Upon completion of our aptitude test, your
         results have been compiled and the best class has been presented to you. This is just the first step on your journey.
         By reaching out to J.M. Consulting, we may further aid you by providing addition class information, formal training, 
         and a mentor to guide you on your travels.</p>";
// echo <br>

$warriorResults = 0;
$burglarResults = 0;
$wizardResults = 0;
    
    //Q1
    if($q1 <= 3){
        $wizardResults++;
    }else if($q1 <= 6){
        $burglarResults++;
    }else{
        $warriorResults++;
    }

    //Q2
    if($q2 <= 3){
        $warriorResults++;
    }else if($q2 <= 6){
        $burglarResults++;
    }else{
        $wizardResults++;
    }

    //Q3
    if($q3 <= 3){
        $warriorResults++;
    }else if($q3 <= 6){
        $wizardResults++;
    }else{
        $burglarResults++;
    }

    //Q4
    if($q4 <= 3){
        $warriorResults++;
    }else if($q4 <= 6){
        $wizardResults++;
    }else{
        $burglarResults++;
    }

    //Q5
    if($q5 <= 3){
        $warriorResults++;
    }else if($q5 <= 6){
        $burglarResults++;
    }else{
        $wizardResults++;
    }

    //Q6
    if($q6 <= 3){
        $wizardResults++;
    }else if($q6 <= 6){
        $burglarResults++;
    }else{
        $warriorResults++;
    }

    //Q7
    if($q7 <= 3){
        $warriorResults++;
    }else if($q7 <= 6){
        $wizardResults++;
    }else{
        $burglarResults++;
    }

    //Q8
    if($q8 <= 3){
        $burglarResults++;
    }else if($q8 <= 6){
        $wizardResults++;
    }else{
        $warriorResults++;
    }

    //Q9
    if($q9 <= 3){
        $warriorResults++;
    }else if($q9 <= 6){
        $burglarResults++;
    }else{
        $wizardResults++;
    }

    //Q10
    if($q10 <= 3){
        $burglarResults++;
    }else if($q10 <= 6){
        $wizardResults++;
    }else{
        $warriorResults++;
    }

    //Results
    //echo "Warrior:  $warriorResults<br>";
    //echo "Wizard:  $wizardResults<br>";
    //echo "Burglar:  $burglarResults";

    $resultsClass = "";

    if ($warriorResults == $wizardResults){
        $resultsClass = "Warrior or Wizard";
    }else if ($warriorResults == $burglarResults){
        $resultsClass = "Warrior or Burglar";
    }else if ($wizardResults == $burglarResults){
        $resultsClass = "Wizard or Burglar";
    }else if ($warriorResults > $wizardResults && $warriorResults > $burglarResults){
        $resultsClass = "Warrior";
    }else if ($wizardResults > $warriorResults && $wizardResults > $burglarResults){
        $resultsClass = "Wizard";
    }else if ($burglarResults > $warriorResults && $burglarResults > $wizardResults){
        $resultsClass = "Burglar";
    }

    echo "<br>";
    echo "We have compiled your results and determined your ideal class is: $resultsClass!";
    
    echo "<hr>";
    echo "<br>";

    echo "<a href='HomePage.html'>Return to Home Page</a>";

    echo "<br>";
    echo "<p>J.M. Consulting</p>";
    echo "<p><em>Bringing the adventure to you</em></p>";
    echo "<p>Managing Partners: </p>";
    echo "<p>James McPeek, 313-555-5555</p>";
    echo "<p>Frodo Baggins, 313-555-5555</p>";
    echo "<p>Gandalf White, 313-555-5555</p>";
    echo "<p>https://www.jmc.com/</p>";

    $sql = "INSERT INTO assesstest (Name, Question1, Question2, Question3, Question4, Question5, Question6, Question7, Question8, Question9, Question10, Result) 
        VALUES ('$name', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$resultsClass')";
    #echo $sql;
    if ($db_con->query($sql) === TRUE) {
        
        echo "New record created successfully";
        


    } else {
        echo "Error: " . $sql . "<br>" . $db_con->error;
    }
}else {
    echo 'Something Went Wrong!';
}

$db_con->close();






?>

