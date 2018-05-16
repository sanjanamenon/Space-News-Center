<?php
  include ("connect.php");
   
  $msg = "";
?>

<html>
<head>
<title> Know about the planets</title>
<style>
.button {
  float: right;
  color: black;
  padding: 5px 10px;
  border-radius: 12px;
  margin-top: 1ex;
  margin-right: 20px;
  font-size: 15px;
  cursor: pointer;
  background-color: #ccc;
  border: 2px solid black
}

</style>
</head>

<body bgcolor="black" text="white">
<a href="logout.php" class="button"> Logout</a>
<p><h2> Distance from Earth </h2></p>
<marquee direction="right">
	<img src="p1.jpg" width="30%" height="500px">
	<img src="p3.jpg" width="30%" height="500px">
	<img src="p5.jpg" width="35%" height="500px">
</marquee>
</body>
</html>
