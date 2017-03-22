<?php

session_start();
include 'dbh.php';

$task_title = $_POST['task_title'];
$task_type = $_POST['task_type'];
$task_desc = $_POST['task_desc'];
$page_count = $_POST['page_count'];
$word_count = $_POST['word_count']; 
$file_format = $_POST['file_format']; 


if(isset($_FILES['doc'])){
      $errors= array();
      $file_name = $_FILES['doc']['name'];
      $file_size =$_FILES['doc']['size'];
      $file_tmp =$_FILES['doc']['tmp_name'];
      $file_type=$_FILES['doc']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['doc']['name'])));
	 $uploads_dir = 'C:\xampp\htdocs';
      
      $expensions= array("docx","doc","pdf","txt","sxw","stw");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a file format shown in form";
      }
      
     if(empty($errors)==true){
         move_uploaded_file($file_tmp, '$uploads_dir' .$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
	  
   }

$sql = "INSERT INTO task (task_title, task_type, task_desc, page_count, word_count, file_format) 
VALUES ('$task_title', '$task_type', '$task_desc', '$page_count', '$word_count', '$file_format')";
$result = $conn->query($sql);


echo("You have successfully uploaded.");
echo "<br>";
echo "<br>";
echo("<button onclick=\"location.href='index12.html'\">Now return to homepage</button>");


?>

