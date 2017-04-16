<?php
session_start();
include 'dbh.php';
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM user1 WHERE email='$email' AND pwd='$pwd'";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
	echo "Your email or password is incorrect!";
	echo "<br>";
	echo "<br>";
	echo("<button onclick=\"location.href='index1.php'\">BACK</button>");
} else{
	 header("Location: index12.html"); 
    exit;
}
//header("Location: index1.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>

 
      <link rel="stylesheet" type="text/css" href="style1.css?<?php echo time();?>" />

</head>