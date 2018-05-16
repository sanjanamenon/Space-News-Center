<?php
  include ("connect.php");
   include ("sessions_user.php");
  $msg = "";
?>

<html>
<head>
<title> welcome to nasa </title>

<style>
body {
    background-image:url("75.jpg");
    background-repeat: no-repeat;
}
.button1 {
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

.button	{
	  border-radius: 4px;
  	background-color: #f4511e;
 	 border: none;
 	 color: #FFFFFF;
  	ext-align: center;
  	font-size: 28px;
 	 padding: 20px;
	  width: 200px;
	  transition: all 0.5s;
	  cursor: pointer;
	  margin: 5px;
	}

	.button span {
 	 cursor: pointer;
	display: inline-block;
  	position: relative;
  	transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


</style>
</head>
<body bgcolor="black" text="yellow">
<a href="logout.php" class="button1"> Logout</a>
<p> <h1 align=center> Welcome to<br>  National Aeronautics and Space Administration  </h1> </p> <br>



<meta name="viewport" content="width=device-width, initial-scale=1">

<p align=center>
<a href="nasahistory.php"  button class="button"> <span> History </span></button>
<a href="nasamissions.php"  button class="button"> <span> Missions </span></button> </a> </p>

 <p align=center>  <img src="nasamain.png" height="60%" width="40%"> </p>
 <script>
 function goBack() {
     window.history.back();
 }

 </script>
 <button onclick="goBack()">Go Back</button>
</body>
</html>
