<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>

 
      <link rel="stylesheet" type="text/css" href="style1.css?<?php echo time();?>" />

</head>
<body>
<h1> Scribe-Check </h1>
<p class="Intro">Our website is to facilitate
the proofreading of student theses, dissertations, assignments, research papers alike among
students and staff. </p>

<div class="form">

<form action="login.php" method="POST">
	<input type="text" name="email" placeholder="Email"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit" class="button button-block">LOGIN</button>
</form>



<?php
	if (isset($_SESSION['id'])){
		echo "User ID &nbsp;", $_SESSION['id'];
		echo "\n";
		echo "is logged in.";
		
	} else {
		echo "You are not logged in!";
		
	}
?>



<br><br><br>

<form action="signup.php" method="POST">

	<input type="text" name="first" placeholder="Firstname"><br>
	<input type="text" name="last" placeholder="Lastname"><br>
	<input type="text" name="idnum" placeholder="Student/Staff ID Number"><br>
	<input type="text" name="email" placeholder="Email"><br>
	<label for='user_subject'>Select your field of study:</label><br>
	<select multiple="multiple" name="user_subject">
		<option value="Engineering">Engineering Dept</option>
		<option value="Business">Business Dept</option>
		<option value="Nursing">Nursing Dept</option>
		<option value="Science">Science Dept</option>
		<option value="Education">Education Dept</option>
		<option value="Arts">Arts Dept</option>
	</select><br><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	
	<button type="submit" class="button button-block">SIGN UP</button>
</form>



<br><br><br>


<form action="logout.php">
	<button class="button button-block">LOG OUT</button>

</form>
</div>
</body>
</html>