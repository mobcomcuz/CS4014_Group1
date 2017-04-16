<?php // This snippet of php should go on the top of all of your pages. If you are not logged in, you'll be redirected to the home page.
session_start();
if(!$_SESSION['loggedIn']) {
  header("location:index1.php"); 
  die(); 
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Main Page  </title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE CSS -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	

</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
     <!--NAVBAR SECTION-->
    <div class="navbar navbar-inverse navbar-fixed-top scrollclass" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <
                </button>
                <a class="navbar-brand" href="#">Scribe Check</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">HOME</a></li>
                    
                    <li><a href="#portfolio">UPLOAD</a></li>
                     <li><a href="#about">ABOUT</a></li>
                     <li><a href="#contact">CONTACT</a></li>
					 <li><a href="logout.php">LOG OUT</a></li>
					 
					</form></li>
                </ul>
            </div>
           
        </div>
    </div>
   <!--END NAVBAR SECTION-->
        <!--HOME SECTION-->
       <section id="home" class="text-center">
            <div class="container">
           <div class="row text-center pad-top" >
            <div class="col-md-12 pad-top-more">
                <h1>Welcome to Scribe_Check  </h1>
				<br></br>
                <img src="pic.png" alt="document" style="width:250px;height:200px;">
                
				<h3>About Us</h3>
                <p class="col-md-8 col-md-offset-2">
 The purpose of our website is to provide an online service for college students who are looking for their work to be corrected/reviewed
                </p>
                
            </div>
               
               </div>
        </div>
       </section>
    <!--END SECTION-->
     <!--PORTFOLIO SECTION-->
    <section id="portfolio"  >
            <div class="container">
                    <div class="row text-center" >
               <div class="col-md-12">
                    <h1>Upload Documents Here </h1>
					<br></br>
					<br></br>
		<form action="upload.php" method="post">
	<div class="form-group">
			<label for="tasktitle">Task Title</label>
    <input type="task" class="form-control" name="task_title"  placeholder="Enter task title">
    </div>
			<div class="form-group">
				<label for="task_type">Task Type</label>
				<input type="task" class="form-control" name="task_type"  placeholder="Enter task type (eg. MSc thesis, BSc dissertation, project report, PhD thesis, Assignment, Conference Research Paper etc">
			</div>
			
  
			<div class="form-group">
					<label for="exampleTextarea">Brief Description of Task</label>
					<textarea class="form-control" name="task_desc" rows="3"></textarea>
			</div>
			
			<div class="form-group row">
					<label for="example-number-input" class="col-2 col-form-label">Number of pages</label>
						<div class="col-10">
							<input class="form-control" type="number" value="42" name="page_count">
			</div>
			
			<div class="form-group row">
					<label for="example-number-input" class="col-2 col-form-label">Number of words</label>
						<div class="col-10">
							<input class="form-control" type="number" value="5000" name="word_count">
			</div>
			
			<div class="form-group">
				<label for="exampleSelect1">File Type</label>
					<select class="form-control" name="file_format">
						<option>.docx</option>
						<option>.doc</option>
						<option>open office</option>
						<option>text</option>
						<option>pdf</option>
					</select>
			</div>
  
			<div class="form-group row">
				<label for="example-date-input" class="col-2 col-form-label">Date for task to be claimed</label>
					<div class="col-10">
						<input class="form-control" type="date"  name="claimdate">
			</div>
 
			<div class="form-group row">
				<label for="example-date-input" class="col-2 col-form-label">Date for task to be completed</label>
					<div class="col-10">
						<input class="form-control" type="date"  name="enddate">
			</div>
 
			<input type="submit">    </form>
					
               </div>
                     </div>
					 </div>
					  </div>
					   </div>
					   </div>
					    </div>
						
         

        </section>
		
	<label class="custom-file-upload">
    <input type="file"/>
</label>
<p>Please upload your document to be reviewed/corrected</p>
		
		
		
    <!--END PORTFOLIO SECTION-->
		
		<iframe src="http://localhost/tasks.php" class="task-frame" 
		style=" width:100%;
 float:center;
 height:100%;
 padding:10px;
 position:relative;
 overflow-x:hidden;
 overflow-y:visible;
 border:none;" >Tasks</iframe>
		
		
		
		
    <!--END PORTFOLIO SECTION-->
    <!--ABOUT SECTION-->
	<br></br>
	<br></br>
	<br></br>
	<br></br>
	<br></br>
        <section id="about"  >
            <div class="container">
                 <div class="row text-center" >
               <div class="col-md-12">
                    <h1>ABOUT  COMPANY</h1>
               </div>
                     </div>
          </section> 
    <!--END ABOUT SECTION-->
    <!--CONTACT SECTION-->
         <section id="contact">
               <div class="container">
                     <div class="row text-center" >
               <div class="col-md-12">
                    <h1>CONTACT HERE</h1>
               </div>
                     </div>
	
           <div class="row text-center pad-top" >
            <div class="col-md-8 col-md-offset-2">
                <div class="row ">
                             <form>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Notes" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                                                   <button type="submit" class="btn btn-primary btn-lg">SUBMIT REQUEST</button>

                            </div>
                                 </form>
                        </div>
            </div>
               
               </div>
        </div>
		<h3> How to reach us! </h3>

<pre>Number:061 202368
Email: 15142151@studentmail.ie
Address: B2005,Building, University Of Limerick </p>
        </section>
     <section>
          <div class="add">
 <i>Address: </i> Students Union, Univeristy of Limerick, Ireland
   </div>
      <h3> Our Location </h3>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(52.6678,-8.5767);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 14};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

  
       
         </section>
   
     <!--FOOTER SECTION-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
     <!-- EASING SCROLL SCRIPTS PLUGIN  -->
    <script src="assets/plugins/jquery.easing.min.js"></script>
     <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>
</body>
</html>