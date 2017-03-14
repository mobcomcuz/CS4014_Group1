<?php

session_start();
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$ID1 = $_POST['ID1'];
$email = $_POST['email'];
$formField = $_POST['formField'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO user1 (first, last, ID1, email, formField, pwd) 
VALUES ('$first', '$last', '$ID1', '$email', '$formField', '$pwd')";
$result = $conn->query($sql);


		
	


echo("You have successfully registered.");
echo "<br>";
echo "<br>";
echo("<button onclick=\"location.href='index1.php'\">NOW LOGIN</button>");

//header("Location: index1.php");

?>	

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>

 
      <link rel="stylesheet" type="text/css" href="style1.css?<?php echo time();?>" />

</head>