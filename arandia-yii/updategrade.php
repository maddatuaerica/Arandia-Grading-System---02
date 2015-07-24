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
            <li class="current"><a href="index.html">Home</a></li>
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
	
$stud = $_POST['stud'];
$fst = $_POST['1st'];
$snd = $_POST['2nd'];
$trd = $_POST['3rd'];
$fth = $_POST['4th'];
$fg = $_POST['fg'];
$code = $_POST['subj_code'];
$act = $_POST['act'];
	
$sql4 = "UPDATE grade SET 1st='$fst', 2nd='$snd', 3rd='$trd', 4th='$fth', final='$fg' WHERE stud_id='$stud' and subj_code='$code', actTak='$act'";

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
	
$stud = $_POST['stud'];
	
$sql3 = "SELECT * FROM grade WHERE stud_id='$stud' ";

 
  $result3 = mysql_query($sql3);



echo "<table border=\"1\">";
echo "<tr>
<th><font color=\"black\">grade id</th>
<th><font color=\"black\">Subject Code</th>
<th><font color=\"black\">1st Grading</th>
<th><font color=\"black\">2nd Grading</th>
<th><font color=\"black\">3rd Grading</th>
<th><font color=\"black\">4th Grading</th>
<th><font color=\"black\">Final Grade</th>
<th><font color=\"black\">Student ID</th>
</tr>";

while($row = mysql_fetch_array($result3)) {
  echo "<tr>";
  echo "<td><font color=\"black\">" . $row['gr_id'] . "</td>";
  echo "<td><font color=\"black\">" . $row['subj_code'] . "</td>";
   echo "<td><font color=\"black\">" . $row['1st'] . "</td>";
  echo "<td><font color=\"black\">" . $row['2nd'] . "</td>";
  echo "<td><font color=\"black\">" . $row['3rd'] . "</td>";
  echo "<td><font color=\"black\">" . $row['4th'] . "</td>";
  echo "<td><font color=\"black\">" . $row['final'] . "</td>";
   echo "<td><font color=\"black\">" . $row['stud_id'] . "</td>";	
 
  echo "</tr>";
  
}
echo "</table>";


  
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
