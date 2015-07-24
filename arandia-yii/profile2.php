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
  img.logo{
	position:absolute;
	left:35%;
	font-family:verdana;
	font-size:15px;
	}
	
	img.ppic{
	position:absolute;
	top:27%;
	left:22%;
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
            <li><a href="index.html">Home</a></li>
            <li><a href="login.html">Logout</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div><!--close menubar-->
      </div><!--close header-->	  
	  <div id="banner_image">
	    
	  </div><!--close banner_image-->			  
	  <div id="content"><center>
	  
	  <img class="ppic" src="ya.png" width="200px">
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
	
$user = $_POST['tchr'];
	
$sql3 = "SELECT * FROM teacher WHERE tchr_id='$user' ";

 
  $result3 = mysql_query($sql3);


while($row = mysql_fetch_array($result3)) {
  echo "<p class=\"profile\">";
  echo "<font color = \"black\" >Teacher Id:  ";
  echo "<font color = \"blue\" >" . $row['tchr_id'] . "<br>";
  echo "<font color = \"black\" >Last Name:  ";
  echo "<font color = \"blue\" >" . $row['lname'] . "<br>";
  echo "<font color = \"black\" >First name  ";
  echo "<font color = \"blue\" >" . $row['fname'] . "<br>";
  echo "<font color = \"black\" >Middle Name:  ";
  echo "<font color = \"blue\" >" . $row['mname'] . "<br>";
  echo "<font color = \"black\" >Age:  ";
  echo "<font color = \"blue\" >" . $row['age'] . "<br>";
  echo "<font color = \"black\" >Address:  ";
  echo "<font color = \"blue\" >" . $row['addr'] . "<br>";
  echo "<font color = \"black\" >Email Address:  ";
  echo "<font color = \"blue\" >" . $row['emailadd'] . "<br>";
  echo "<font color = \"black\" >Position:  ";
  echo "<font color = \"blue\" >" . $row['position'] . "<br>";
  echo "<font color = \"black\" >Available Time:  ";
  echo "<font color = \"blue\" >" . $row['atime'] . "<br>";
  echo "<font color = \"black\" >Available Day:  ";
  echo "<font color = \"blue\" >" . $row['aday'] . "<br>";
  echo "</tr></table><br><br></p>";
}




?><br>
<button id="hide">Update a Student's Grade</button>
<button id="show">Update My Profile</button>
<button id="but">Add new Subject Grade</button>
<script> $(document).ready(function(){
    $("#hide").click(function(){
        $("#form1").show();
		$("#form2").hide();
		$("#form3").hide();
    });
    $("#show").click(function(){
        $("#form2").show();
		$("#form1").hide();
		$("#form3").hide();
    });
	$("#but").click(function(){
	    $("#form3").show();
		$("#form1").hide();
		$("#form2").hide();
    });
});</script><br>
<br>
<form id="form1" action="updategrade.php" method="POST"><fieldset>
<legend>enter student id number of the grade you want to update: </legend><br>
Student ID: <input type="text" name="stud"><br />
1st Grading: <input type="text" name="1st"><br>
2nd Grading: <input type="text" name="2nd"><br>
3rd Grading: <input type="text" name="3rd"><br>
4th Grading: <input type="text" name="4th"><br>
Final Grade: <input type="text" name="fg"><br>
Subject Code: <input type="text" name="subj_code"><br> 
Action Taken: <input type="text" name="act"><br>

<input type="submit" value="submit" name="submit" /><br><br>
</fieldset></form></center>
<script> $("#form1").hide();</script>
</p>

<!-- teacher update form-->
<center>
<form id="form2" action="updatetchr.php" method="POST"><fieldset><legend>Update Information</legend><br>
Teacher ID: <input type="text" name="tchr"><br>
Lastname: <input type="text" name="lname"><br>
Firstname: <input type="text" name="fname"><br>
Middle Initial: <input type="text" name="mname"><br>
Age:<input type="text" name="age"><br>
Home Address: <input type="text" name="addr"><br>
Email Address: <input type="text" name="eadd"><br>
Position: <input type="text" name="position"><br>
Available Time : <input type="text" name="atime"><br>
Available Day:<input type="text" name="aday"><br>

<input type="submit" value="Update" name="submit" />
</fieldset></form><br><br>
<script> $("#form2").hide();</script>
<br><br>

<form id="form3" action="insert.php" method="POST">
<fieldset><legend>Add new Subject for Student</legend><br>
add new Subject and Grading row for a student: <br>
Student ID: <input type="text" name="stud"><br />
1st Grading: <input type="text" name="1st"><br>
2nd Grading: <input type="text" name="2nd"><br>
3rd Grading: <input type="text" name="3rd"><br>
4th Grading: <input type="text" name="4th"><br>
Final Grade: <input type="text" name="fg"><br>
Subject Code: <input type="text" name="subj_code"><br> 


<input type="submit" value="submit" name="submit" />
<br><br></fieldset></form></center>
<script> $("#form3").hide();</script>
<br><br>
</div></div>
      </div><!--close content-->	

     
	</div><!--close site_content-->	
    <div id="footer">  
      All Rights Reserve | Project of Group 203
	  </div><!--close footer-->		
  </div><!--close main-->	
</body>
</html>
