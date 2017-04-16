<?php

session_start();
include 'dbh.php';

$task_title = $_POST['task_title'];
$task_type = $_POST['task_type'];
$task_desc = $_POST['task_desc'];
$page_count = $_POST['page_count'];
$word_count = $_POST['word_count']; 
$file_format = $_POST['file_format']; 


$sql = "INSERT INTO task (task_title, task_type, task_desc, page_count, word_count, file_format) 
VALUES ('$task_title', '$task_type', '$task_desc', '$page_count', '$word_count', '$file_format')";
$result = $conn->query($sql);


echo("You have successfully uploaded.");
echo "<br>";
echo "<br>";
echo("<button onclick=\"location.href='index12.html'\">Now return to homepage</button>");


?>

