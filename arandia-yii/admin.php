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
	body{
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
	
$user = $_POST['user'];
	
$sql3 = "SELECT * FROM teacher WHERE tchr_id='$user' ";

 
  $result3 = mysql_query($sql3);


while($row = mysql_fetch_array($result3)) {
  
  echo "<font color = \"black\" >Employee Id:  ";
  echo "<font color = \"blue\" >" . $row['tchr_id'] . "<br>";
  echo "<font color = \"black\" >Last Name:  ";
  echo "<font color = \"blue\" >" . $row['lname'] . "<br>";
  echo "<font color = \"black\" >First name:  ";
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
  echo "</tr></table><br><br>";
}


?><br><br><br><br>
<button id="hide">View Employee table</button>
<button id="show">Add new Teacher/Staff</button>
<button id="add">Add new Subject</button>
<button id="stud">Add Student subject</button>
<script> $(document).ready(function(){
    $("#hide").click(function(){
        $("#tab1").show();
		$("#form2").hide();
		$("#form3").hide();
		$("#form4").hide();
    });
    $("#show").click(function(){
        $("#form2").show();
		$("#tab1").hide();
		$("#form3").hide();
		$("#form4").hide();
    });
	$("#add").click(function(){
        $("#form3").show();
		$("#tab1").hide();
		$("#form2").hide();
		$("#form4").hide();
    });
	$("#stud").click(function(){
        $("#form4").show();
		$("#tab1").hide();
		$("#form3").hide();
		$("#form2").hide();
    });
});</script><br>



<!---Teacher table -->
<br><br>
<?php

$sql = "SELECT * FROM teacher";
 $result = mysql_query($sql);
echo "<table id =\"tab1\" border='1' >";
echo "<tr>
<th><font color=\"black\">Teacher ID</th>
<th><font color=\"black\">Firstname</th>
<th><font color=\"black\">Lastname</th>
<th><font color=\"black\">Middle Name</th>
<th><font color=\"black\">Age</th>
<th><font color=\"black\">Address</th>
<th><font color=\"black\">Email address</th>
<th><font color=\"black\">Position</th>
<th><font color=\"black\">Available Time</th>
<th><font color=\"black\">Available Day</th>
</tr>";

while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td><font color=\"black\">" . $row['tchr_id'] . "</td>";
  echo "<td><font color=\"black\">" . $row['fname'] . "</td>";
   echo "<td><font color=\"black\">" . $row['lname'] . "</td>";
  echo "<td><font color=\"black\">" . $row['mname'] . "</td>";
  echo "<td><font color=\"black\">" . $row['age'] . "</td>";
  echo "<td><font color=\"black\">" . $row['addr'] . "</td>";
  echo "<td><font color=\"black\">" . $row['emailadd'] . "</td>";
   echo "<td><font color=\"black\">" . $row['position'] . "</td>";
  echo "<td><font color=\"black\">" . $row['atime'] . "</td>";
  echo "<td><font color=\"black\">" . $row['aday'] . "</td>";
 
  echo "</tr>";
}

echo "</table>";
?>
<script> $("#tab1").hide();</script>
<br>

<!-- teacher update form-->
<center><br><br>
<form id="form2" action="insert.php" method="POST"><fieldset><legend>Teacher/Staff Information</legend><br>
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

<input type="submit" value="Submit" name="submit" /><br><br>
</fieldset></form><br><br>
<script> $("#form2").hide();</script>
<br>

<form id="form3" action="insert1.php" method="POST">
<fieldset><legend>New Subject</legend><br>
enter new subject to be added: <br>
Subject Code: <input type="text" name="sub"><br />
Subject Description: <input type="text" name="desc"><br>
Teacher ID: <input type="text" name="tchr"><br>

<input type="submit" value="submit" name="submit" />
<br><br></fieldset></form></center>
<script> $("#form3").hide();</script>
</p>

<br>


<form id="form4" action="insert2.php" method="POST">
<fieldset><legend>Add new Subject for Student</legend><br>
add new Subject and Grading row for a student: <br>
Student ID: <input type="text" name="stud"><br />
1st Grading: <input type="text" name="1st"><br>
2nd Grading: <input type="text" name="2nd"><br>
3rd Grading: <input type="text" name="3rd"><br>
4th Grading: <input type="text" name="4th"><br>
Final Grade: <input type="text" name="fg"><br>
Subject Code: <input type="text" name="subj_code"><br> 
Number of Unit: <input type="text" name="nuo"><br>
Action Taken: <input type="text" name="act"><br>

<input type="submit" value="submit" name="submit" />
<br><br></fieldset></form></center>
<script> $("#form4").hide();</script>
</p>
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
