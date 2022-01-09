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

$sql = "SELECT * FROM users ";
$users = $db_con->query($sql);

$db_con->close();
?>

<!DOCTYPE html>
<html>
    <head> 
        <title>Virtual Change System Home </title>
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <div id="assessment-container">
            <h3 id="assessment-statement">Virtual Change System Home</h3>
            <form id="assessment-form"  method="POST">

                <style>

</style>
<table class="demo">
	<caption>Client User List</caption>
	<thead>
	<tr>
		<th>Client ID</th>
		<th>User Name</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Company</th>
		<th>Email Address</th>
	    <th>Action</th>
	</tr>
	</thead>
	<tbody>
		<?php foreach($users as $user) { ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td>&nbsp;</td>
			<td><?php echo $user['email']; ?></td>
			<td><a href="viewtest.php?user=<?php echo $user['id']?>">View Test</a></td>
		</tr>
		<?php } ?>
	
	</tbody>
</table>
</form>
                <table>

                   
					 <tr id="submit-row">
                        <td>
                            <a  href="host-login.php"><input id="submit-button" type="submit" name="Logout" value="Logout"></a>
							
                        </td>
                    </tr>
                </table>
            
        </div>
    </body>
</html>

