<?php
  include ("connect.php");
	if(isset($_SESSION['userlogin'])){
	include ("sessions_user.php");
	}
	if(isset($_SESSION['adminlogin'])){
	include ("sessions_admin.php");
}
  $msg = "";
?>

<html>
<head>
</head>

<body bgcolor="#F5D0A9" text="#3B240B">
<p> <b>
	5. NASA Honors Legacy of Stephen Hawking.</b> </p>

<img src="ln2.jpg" width="25%" height="30%">

<p>
The death of renowned physicist Stephen Hawking, reported today (March 14), prompted accolades from across NASA, including from its acting administrator and many astronauts.<br>
Robert Lightfoot, NASA's acting administrator, spoke about Hawking's career in a statement on the NASA website.<br>
<i> "Today, the world lost a giant among men, whose impact cannot be overstated. <br>
Our condolences go out to the family and friends of Stephen Hawking. <br>
Stephen's breakthroughs in the fields of physics and astronomy not only changed how we view the cosmos,<br>
but also has played, and will continue to play, a pivotal role in shaping NASA's efforts to explore our solar system and beyond." </i> <br> <br>
Stephen Hawking discussed why we should go to space on April 21, 2008, at George Washington University in Washington as part of a lecture series for NASA's 50th anniversary. <br>
<hr>
</body>
</html>
