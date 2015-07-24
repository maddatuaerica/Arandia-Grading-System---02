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
	
$tchr = $_POST['tchr'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$age = $_POST['age'];
$addr = $_POST['addr'];
$eadd = $_POST['eadd'];
$position = $_POST['position'];
$atime = $_POST['atime'];
$aday = $_POST['aday'];

	
$sql4 = "UPDATE teacher SET fname='$fname', lname='$lname', mname='$mname', age='$age', addr='$addr', emailadd='$eadd', position='$position', atime='$atime', aday='$aday' WHERE tchr_id=$tchr ";

if (!mysql_query($sql4)) {
	die ('ERROR: ' . mysql_error());
	}

mysql_close();


?>

<br><br>

<?php


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
  echo "<table border=\"1\">";
  echo "<tr>";
  echo "<th><font color = \"blue\" >Teacher Id:</th>";
  echo "<td><font color = \"blue\" >" . $row['tchr_id'] . "</td></tr>";
  echo "<th><font color = \"blue\" >Last Name:</th>";
  echo "<td><font color = \"blue\" >" . $row['lname'] . "</td><tr>";
  echo "<th><font color = \"blue\" >First name</th>";
  echo "<td><font color = \"blue\" >" . $row['fname'] . "</td></tr>";
  echo "<th><font color = \"blue\" >Middle Name:</th>";
  echo "<td><font color = \"blue\" >" . $row['mname'] . "</td></tr>";
  echo "<th><font color = \"blue\" >Age:</th>";
  echo "<td><font color = \"blue\" >" . $row['age'] . "</td></tr>";
  echo "<th><font color = \"blue\" >Address:</th>";
  echo "<td><font color = \"blue\" >" . $row['addr'] . "</td></tr>";
  echo "<th><font color = \"blue\" >Email Address:</th>";
  echo "<td><font color = \"blue\" >" . $row['emailadd'] . "</td></tr>";
  echo "<th><font color = \"blue\" >Position:</th>";
  echo "<td><font color = \"blue\" >" . $row['position'] . "</td></tr>";
  echo "<th><font color = \"blue\" >Available Time:</th>";
  echo "<td><font color = \"blue\" >" . $row['atime'] . "</td></tr>";
  echo "<th><font color = \"blue\" >Available Day:</th>";
  echo "<td><font color = \"blue\" >" . $row['aday'] . "</td></tr>";
  echo "</tr></table><br><br>";
}




?>
<a href="profile2.php"><button>Back</button></a>
</div></div>
      </div><!--close content-->	

     
	</div><!--close site_content-->	
    <div id="footer">  
      All Rights Reserved | Project of Group 203
	  </div><!--close footer-->		
  </div><!--close main-->	
</body>
</html>
