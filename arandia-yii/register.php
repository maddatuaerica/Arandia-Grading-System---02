<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Arandia College</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
  </script>
  <style>
  fieldset {
  padding: 1em;
  font:100%/1 sans-serif;
  }
label {
  float:left;
  width:25%;
  margin-right:0.5em;
  padding-top:0.2em;
  text-align:right;
  font-weight:bold;
  } 	
 
  img.logo{
	position:absolute;
	left:35%;
	font-family:verdana;
	font-size:15px;
	}
  </style>
</head>

<body>
  <div id="main">	
	<div id="site_content">
      <div id="site_heading">
	  <img class="logo" src="arandia logo.png" width="100px">
	    <h1>Arandia College</h1>	
	  </div><!--close site_heading-->
	  <div id="header">
	    <div id="menubar">
          <ul id="menu">
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div><!--close menubar-->
      </div><!--close header-->	  
	  <div id="banner_image">
	    <div id="slider-wrapper">        
          <div id="slider" class="nivoSlider">
            <img src="images/building.jpg" alt="" />
            <img src="images/facade2.jpg" alt="" />
			<img src="images/facade3.jpg" alt="" />
		  </div><!--close slider-->
		</div><!--close slider_wrapper-->
	  </div><!--close banner_image-->			  
	  <div id="content">
        <p><a href="register.php">Register</a> | <a href="ourwork.html">Login</a></p>
<h3>Registration Form</h3>
<form action="" method="POST"><fieldset><legend>Student Information</legend><br>
Lastname: <input type="text" name="lname"><br>
Firstname: <input type="text" name="fname"><br>
Middle Initial: <input type="text" name="mname"><br>
Home Address: <input type="text" name="addr"><br>
Birthday: <select name="mon"> Month: <option value="01">January
						  <option value="02">February
						  <option value="03">March
						  <option value="04">April
						  <option value="05">May
						  <option value="06">June
						  <option value="07">July
						  <option value="08">August
						  <option value="09">September
						  <option value="10">October
						  <option value="11">November
						  <option value="12">December
						  </select>
					Day:<input type="text" name="day">
					Year:<input type="text" name="year"><br>
	Birth Place:<input type="text" name="bplace"><br>
	Sex: <select name="sex"> <option value="F"> Female <option value="M">Male </select><br>
	Age:<input type="text" name="age"><br>
	Contact No. : <input type="text" name="tel"><br><br>
	Level: <input type="radio" name="level" value="nursery" checked>Nursery
		   <input type="radio" name="level" value="kinder" >Kinder
		   <input type="radio" name="level" value="prep">Preparatory<br><br>
		   <input type="radio" name="level" value="G1" >Grade 1
		   <input type="radio" name="level" value="G2" >Grade 2
		   <input type="radio" name="level" value="G3" >Grade 3
		   <input type="radio" name="level" value="G4" >Grade 4
		   <input type="radio" name="level" value="G5" >Grade 5
		   <input type="radio" name="level" value="G6" >Grade 6
		   <input type="radio" name="level" value="G7" >Grade 7
		   <input type="radio" name="level" value="G8" >Grade 8
		   <input type="radio" name="level" value="3rd" >Junior
		   <input type="radio" name="level" value="4th" >Senior 
		   <br>
		   </fieldset> <br>
		   <fieldset><legend>Other Information</legend><br>
		   Previous School Last Attended: <input type="text" name="prevschl"><br>
		   Father's Name: <input type="text" name="father"><br>
		   Occupation: <input type="text" name="Foccu"><br>
		   Mother's Name: <input type="text" name="mother"><br>
		   Occupation: <input type="text" name="Moccu"><br><br>
		   Incase of Emergency, Please Contact: <br>
		   Name: <input type="text" name="Gname"><br>
		   Relation: <input type="text" name="Grel"><br>
		   Tel No. <input type="text" name="Gtel"><br>
		   <br>
		   Mode Of Payment: 
		   <input type="radio" name="MOP" value="cash">CASH
		   <input type="radio" name="MOP" value="Semi">Semi-Annual
		   <input type="radio" name="MOP" value="Quar">Quarterly
		   <input type="radio" name="MOP" value="Month">Monthly
		   <br>
		   <br>
Username: <input type="text" name="user"><br />
Password: <input type="password" name="pass"><br />
Usertype: <select name="usertype"> <option value="student">Student</option>
				   <option value="teacher">Teacher</option>
				   <option value="staff">Staff</option> </select>
				   <br>	<br>
<input type="submit" value="Register" name="submit" />
</form>
<?php

define('DB_NAME', 'ac');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link) {
	die('Could not connect: ' . mysql_error());
	}
	
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
	}
	
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$lname=$_POST['lname']; 
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$addr=$_POST['addr'];
	$mon=$_POST['mon'];
	$day=$_POST['day'];
	$year=$_POST['year'];
	$bplace=$_POST['bplace'];
	$sex=$_POST['sex'];
	$age=$_POST['age'];
	$tel=$_POST['tel']; 
	$level=$_POST['level']; 
	//other informations
	$prevschl= $_POST['prevschl'];
	$father=$_POST['father'];
	$Foccu=$_POST['Foccu'];
	$mother=$_POST['mother'];
	$Moccu=$_POST['Moccu'];
	$Gname=$_POST['Gname'];
	$Grel=$_POST['Grel'];
	$Gtel=$_POST['Gtel'];
	$MOP=$_POST['MOP'];
	
	

	
	$sql="INSERT INTO student VALUES('','$lname','$fname','$mname','$addr','$year-$mon-$day','$bplace','$sex','$age','$tel','$level','$prevschl','$father','$Foccu','$mother','$Moccu','$Gname','$Grel','$Gtel','$MOP','$user','$pass','Student')";

	if (!mysql_query($sql)) {
	die ('ERROR: ' . mysql_error());
	}

mysql_close();
?>
      </div><!--close content-->	

      <div class="sidebar_container">  		  
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Blog</h2>
			<h4>April 2012</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		      <a href="#">Read more</a>
           </div><!--close sidebar_item--> 
         </div><!--close sidebar-->     		
	    <div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Blog</h2>
		  	<h4>April 2012</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		      <a href="#">Read more</a>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Blog</h2>
			<h4>April 2012</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		      <a href="#">Read more</a>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
      </div><!--close sidebar_container-->		  
	
	</div><!--close site_content-->	
    <div id="footer">  
      All Rights Reserved | Project of Group 203
	  </div><!--close footer-->		
  </div><!--close main-->	
</body>
</html>
