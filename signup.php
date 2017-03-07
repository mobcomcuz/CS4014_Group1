<?php

session_start();
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user1 (first, last, uid, pwd) 
VALUES ('$first', '$last', '$uid', '$pwd')";
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