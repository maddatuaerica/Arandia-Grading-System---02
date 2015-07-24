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

	//for subjects
	
	$subj=$_POST['sub'];
	$descs=$_POST['desc'];
	$tchr=$_POST['tchr'];
	
	
	$sql1="INSERT INTO subject VALUES('$subj','$descs','$tchr')";

	if (!mysql_query($sql1)) {
	die ('ERROR: ' . mysql_error());
	}
	

mysql_close();
?>
<a href="admin.php">Back</a>
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
