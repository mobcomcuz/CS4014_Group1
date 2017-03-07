<?php

session_start();
include 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];



$sql = "SELECT * FROM user1 WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	echo "Your username or password is incorrect!";
} else{
	$_SESSION['id'] = $row['id'];
	echo "Welcome &nbsp;" , $uid;
	echo "<br>";
	echo "<br>";
	echo("<button onclick=\"location.href='index12.html'\">MAIN WEBSITE</button>");
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