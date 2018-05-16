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

<body bgcolor="#D8D8D8" text="#3B240B">
<p> <b>
	3. Deep-Space Radiation May Be Getting More Dangerous for Future Astronauts.</b> </p>

<img src="ln4.jpg" width="35%" height="30%">

<p>
When the sun is active, its magnetic field gains strength and extends farther out into space, helping deflect energetic cosmic rays away from the inner solar system.<br>
Space radiation may be a bigger worry for voyaging astronauts than scientists had thought, at least in the near future, a new study suggests.<br>
"The radiation dose rates from measurements obtained over the last four years exceeded trends from previous solar cycles by at least 30 percent, showing that the radiation environment is getting far more intense," study lead author Nathan Schwadron, a professor of physics at the University of New Hampshire's Space Science Center, said in a statement.<br>
"These particle radiation conditions present important environmental factors for space travel and space weather, and must be carefully studied and accounted for in the planning and design of future missions to the moon, Mars, asteroids and beyond," Schwadron added.
<p>
</body>
</html>
