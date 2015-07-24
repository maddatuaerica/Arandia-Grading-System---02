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
  .boxed {
  position: absolute;
  top:55%;
  left: 46%;
  width:215px;
  height:400px;
  border: 2px solid black;
}
.profile{
	position:absolute;
	top:55%;
	left:100%;
	}
p.prof{
	position:absolute;
	top:55%;
	left:64%;
	font-family:verdana;
	font-size:15px;
	}
img.ppic{
	position:absolute;
	top:27%;
	left:64%;
	font-family:verdana;
	font-size:15px;
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
	  <div id="content">
	  
	  
	  <div class="boxed">
   Proverbs 4:7 <br><br>
   WISDOM IS<br><br>
   THE PRINCIPAL<br><br>
   THING: <br><br>
   THEREFORE<br><br>
   GET WISDOM; <br><br>
   AND ALL THY<br><br>
   GETTING <br><br>
   UNDERSTANDING<br>
</div>
	  
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
	
$user=$_POST['stud'];
	
$sql1 = "SELECT * FROM student WHERE stud_id='$user' ";





 
  $result2 = mysql_query($sql1);


while($row = mysql_fetch_array($result2)) {
  echo "<div id=\"profile\"><p class=\"prof\">";
  echo "<font color = \"black\" >Student Id: ";
  echo "<font color = \"blue\" >" . $row['stud_id'] . "<br>";
  echo "<font color = \"black\" >Last Name:  ";
  echo "<font color = \"blue\" >" . $row['lname'] . "<br>";
  echo "<font color = \"black\" >Firstname:  ";
  echo "<font color = \"blue\" >" . $row['fname'] . "<br>";
  echo "<font color = \"black\" >Middle Name:  </th>";
  echo "<font color = \"blue\" >" . $row['mname'] . "<br>";
  echo "<font color = \"black\" >Address:  </th>";
  echo "<font color = \"blue\" >" . $row['addr'] . "<br>";
  echo "<font color = \"black\" >Birthday:  </th>";
  echo "<font color = \"blue\" >" . $row['bday'] . "<br>";
  echo "<font color = \"black\" >Birth place:  </th>";
  echo "<font color = \"blue\" >" . $row['bplace'] . "<br>";
  echo "<th><font color = \"black\" >Sex:  </th>";
  echo "<td><font color = \"blue\" >" . $row['sex'] . "<br>";
  echo "<th><font color = \"black\" >Age:  </th>";
  echo "<td><font color = \"blue\" >" . $row['age'] . "<br>";
  echo "<th><font color = \"black\" >Contact Number:  </th>";
  echo "<td><font color = \"blue\" >" . $row['tel'] . "<br>";
  echo "<th><font color = \"black\" >Grade/Year Level:  </th>";
  echo "<td><font color = \"blue\" >" . $row['level'] . "<br>";
  echo "<th><font color = \"black\" >Previous School:  </th>";
  echo "<td><font color = \"blue\" >" . $row['prevschl'] . "<br>";
  echo "<th><font color = \"black\" >Father Name:  </th>";
  echo "<td><font color = \"blue\" >" . $row['father'] . "<br>";
  echo "<th><font color = \"black\" >Occupation:  </th>";
  echo "<td><font color = \"blue\" >" . $row['foccu'] . "<br>";
  echo "<th><font color = \"black\" >Mother Name:  </th>";
  echo "<td><font color = \"blue\" >" . $row['mother'] . "<br>";
  echo "<th><font color = \"black\" >Occupation:  </th>";
  echo "<td><font color = \"blue\" >" . $row['moccu'] . "<br>";
  echo "<th><font color = \"black\" >Guardian Name:  </th>";
  echo "<td><font color = \"blue\" >" . $row['gname'] . "<br>";
  echo "<th><font color = \"black\" >Relationship:  </th>";
  echo "<td><font color = \"blue\" >" . $row['grel'] . "<br>";
  echo "<th><font color = \"black\" >Contact Number:  </th>";
  echo "<td><font color = \"blue\" >" . $row['gtel'] . "<br>";
  echo "<th><font color = \"black\" >Mode of Payment:  </th>";
  echo "<td><font color = \"blue\" >" . $row['MOP'] . "<br>";
  echo "<th><font color = \"black\" >Username:  </th>";
  echo "<td><font color = \"blue\" >" . $row['user'] . "<br>";
  echo "<th><font color = \"black\" >Password:  </th>";
  echo "<td><font color = \"blue\" >" . $row['pass'] . "<br>";
  echo "<th><font color = \"black\" >Usertype:  </th>";
  echo "<td><font color = \"blue\" >" . $row['usertype'] . "<br>";
  echo "</tr></table><br><br></div>";
}






//grade

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link) {
	die('Could not connect: ' . mysql_error());
	}
	
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
	}
	
$stud = $_POST['stud'];
$sql6 = "SELECT subj_code, 1st, 2nd, 3rd, 4th, final, NOU, actTak FROM grade where stud_id = '$stud' ";

  
  
 $result6 = mysql_query($sql6);
echo "<table id = \"grade\" border=\"1\">";
echo "<tr>

<th><font color=\"black\">Subject Code</th>
<th><font color=\"black\">1st Grading</th>
<th><font color=\"black\">2nd Grading</th>
<th><font color=\"black\">3rd Grading</th>
<th><font color=\"black\">4th Grading</th>
<th><font color=\"black\">Final Grade</th>
<th><font color=\"black\">Number of <br>Units</th>
<th width=\"10%\"><font color=\"black\"><center>Action<br> Taken</center></th>
</tr>";

while($row = mysql_fetch_array($result6)) {
  echo "<tr>";

  echo "<td><font color=\"black\"><center>" . $row['subj_code'] . "</td>";
   echo "<td><font color=\"black\"><center>" . $row['1st'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['2nd'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['3rd'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['4th'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['final'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['NOU'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['actTak'] . "</center></td>";
  	
 
  echo "</tr>";
}

echo "</table>";




//attendance


$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link) {
	die('Could not connect: ' . mysql_error());
	}
	
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
	}
	
$stud = $_POST['stud'];
$sql7 = "SELECT specif, june, july, aug, sept, oct, nov FROM atten where stud_id = '$stud' ";
$sql8 = "SELECT specif, dece, jan, feb, march, april, total FROM atten where stud_id = '$stud' ";
$sql9 = "SELECT Traits, 1st, 2nd, 3rd, 4th FROM char_build where stud_id = '$stud' ";

 echo "<table border=\"1\" ><th width=\"40.5%\"><center>GRADING SYSTEM USED: AVERAGING</center></th></table>";
 echo "<h3>attendance record</h3>"; 
  
 $result5 = mysql_query($sql7);
echo "<table id = \"atten\" border=\"1\">";
echo "<tr>
<th width=\"42.5%\"><font color=\"black\"> </th>
<th width=\"10%\"><font color=\"black\">Jun</th>
<th width=\"10%\"><font color=\"black\">Jul</th>
<th width=\"10.1%\"><font color=\"black\">Aug</th>
<th width=\"10.1%\"><font color=\"black\">Sept</th>
<th width=\"10%\"><font color=\"black\">Oct</th>
<th width=\"20%\"><font color=\"black\">Nov</th>

</tr>";

while($row = mysql_fetch_array($result5)) {
  echo "<tr>";
  echo "<td><font color=\"black\"><center>" . $row['specif'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['june'] . "</center></td>";
   echo "<td><font color=\"black\"><center>" . $row['july'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['aug'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['sept'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['oct'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['nov'] . "</center></td>";
  	
 
  echo "</tr>";
}

$result8 = mysql_query($sql8);
echo "<table id = \"atten\" border=\"1\">";
echo "<tr>
<th width=\"41%\"><font color=\"black\"> </th>
<th width=\"10%\"><font color=\"black\">Dec</th>
<th width=\"10%\"><font color=\"black\">Jan</th>
<th width=\"10%\"><font color=\"black\">Feb</th>
<th width=\"10%\"><font color=\"black\">Mar</th>
<th width=\"10%\"><font color=\"black\">Apr</th>
<th ><font color=\"black\">Total</th>

</tr>";

while($row = mysql_fetch_array($result8)) {
  echo "<tr>";
  echo "<td><font color=\"black\"><center>" . $row['specif'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['dece'] . "</center></td>";
   echo "<td><font color=\"black\"><center>" . $row['jan'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['feb'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['march'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['april'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['total'] . "</center></td>";
  	
 
  echo "</tr>";
}
echo "</table>";

  // character building
  
echo "<h3>Character Building</h3>";

$result9 = mysql_query($sql9);
echo "<table id = \"atten\" border=\"1\">";
echo "<tr>
<th width=\"49.3%\"><font color=\"black\">Traits</th>
<th width=\"15%\"><font color=\"black\">1st</th>
<th width=\"15%\"><font color=\"black\">2nd</th>
<th width=\"15%\"><font color=\"black\">3rd</th>
<th width=\"15%\"><font color=\"black\">4th</th>

</tr>";

while($row = mysql_fetch_array($result9)) {
  echo "<tr>";
  echo "<td><font color=\"black\"><center>" . $row['Traits'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['1st'] . "</center></td>";
   echo "<td><font color=\"black\"><center>" . $row['2nd'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['3rd'] . "</center></td>";
  echo "<td><font color=\"black\"><center>" . $row['4th'] . "</center></td>";
  	
 
  echo "</tr>";
}
echo "</table>";
  
?>

<script> $(document).ready(function(){
    $("#hide").click(function(){
        $("#grade").show();
		$("#form2").hide();
    });
	}
	)
	</script>
	
<script> $("#grade1").hide();</script>
</p>


<h3>Marking for the Character Traits: </h3>

<p> Since appropriate core value have been indicated in the learning<br> 
competencies in different learning areas, a non-numerical rating<br>
will be used to mark the pupil's character traits.<br>
	The class adviser and other teachers handling<br>
the class give the non-numerical rating for behavior</p> 	
</div></div>
      </div><!--close content-->	

     
	</div><!--close site_content-->	
    <div id="footer">  
      All Rights Reserved | Project of Group 203
	  </div><!--close footer-->		
  </div><!--close main-->	
</body>
</html>
