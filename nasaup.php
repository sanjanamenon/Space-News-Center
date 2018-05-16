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
<dead>
<style>
body {
    background-image:url("0.jpg");
    background-repeat: no-repeat;
    background-position: right top;
}
</style>
</head>

<body text="white">
<p> <h2>NASA's Missions </h2> </p>
<p>
<table border="1" width="60%">

<tr> <td> Mission Name :<br>
1. InSight <br>
Mars lander planned for launch in 2018. <br> <hr>

2.Parker Solar Probe <br>
Is expected to be the first mission into the Sun's corona, slated to launch in 2018.</td> </tr> </table> </p>

</body>
</html>
