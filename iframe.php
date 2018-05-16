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
<p> Latest news </p>

<iframe src="ln3.php" width="40%" height="80%">
</iframe>

<iframe src="ln5.php " width="40%" height="80%">
</iframe>

<iframe src="ln4.php " width="40%" height="80%">
</iframe>

<iframe src="ln1.php " width="40%" height="80%">
</iframe>

<iframe src="ln2.php " width="40%" height="80%">
</iframe>



</body>
</html>
