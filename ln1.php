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

<body bgcolor="#F5A9A9" text="#2A0A0A">


<p align=center> <b>4. Mars 2020: The Red Planet's Next Rover</b> </p>
<p>
<img src="ln1.jpg" width="35%" height="35% "> <br>
 NASA's next Mars rover won't just explore the Red Planet; it will, the space agency hopes, make it so a little bit of Mars might make it to Earth.
 Known as Mars 2020, the upcoming rover will hunt for signs of habitable environments on Mars while searching for signs of past microbial life.
The robotic traveler will also cache a series of samples that can be returned to Earth with a future mission.
The mission is currently slated to blast off from Cape Canaveral, Florida, in July or August 2020, when Earth and Mars are positioned to require the least amount of power for interplanetary travel.
It is scheduled to land in February 2021, with an initial mission duration of at least one Martian year, or 687 Earth-days.
The car-sized rover is about 10 feet long (not including the arm), 9 feet wide, and 7 feet tall (about 3 meters long, 2.7 meters wide, and 2.2 meters tall). At 2,314 lbs. (1,050 kilograms), it weighs less than a compact car.  </p>
<hr>
</body>
</html>
