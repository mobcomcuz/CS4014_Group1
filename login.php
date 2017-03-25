<?php
session_start();
include 'dbh.php';
$email = $_POST['email'];
$pwd = $_POST['pwd'];

//Cant query on pwd because this is the unhashed password. We can query on email because it will be unique.
$sql = "SELECT * FROM user1 WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $hashedpwd = $row['pwd'];
    if(password_verify($pwd, $hashedpwd)){//password_verify verifies the password against the hashed password
    $_SESSION['loggedIn'] = true;
    header("Location: index12.php"); 
    exit;  
    }
}

echo "Your email or password is incorrect!";
echo "<br>";
echo "<br>";
echo("<button onclick=\"location.href='index1.php'\">BACK</button>"); 

//header("Location: index1.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>

 
      <link rel="stylesheet" type="text/css" href="style1.css?<?php echo time();?>" />

</head>