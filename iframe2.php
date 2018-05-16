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
<title> ln</title>
</head>

<body>
<p> Upcoming launches </p>

<iframe src="isroup.php" width="40%" height="80%">
</iframe>


<iframe src="nasaup.php" width="40%" height="80%">
</iframe>



</body>
</html>
