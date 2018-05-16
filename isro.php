<?php
  include ("connect.php");
   include ("sessions_user.php");
  $msg = "";
?>

<html>
<head>
<title> welcome to isro </title>
<style>
body {
    background-image:url("75.jpg");
    background-repeat: no-repeat;
    background-position: right top;
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

.button	 {
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

<body text="white">
<a href="logout.php" class="button1"> Logout</a>
<p> <h1 align=center> Welcome to<br> INDIAN SPACE RESEARCH ORGANISATION </h1> </p> <br>



<meta name="viewport" content="width=device-width, initial-scale=1">

<p align=center>
<a href="isrohistory.php"  button class="button"> <span> History </span></button>
<a href="isromissions.php"  button class="button"> <span> Missions </span></button> </a></p>

 <p align=center>  <img src="isromain.png" height="70%" width="50%"> </p>
<script>
 function goBack() {
     window.history.back();
 }

 	</script>
<button onclick="goBack()">Go Back</button>
</body>
</html>
