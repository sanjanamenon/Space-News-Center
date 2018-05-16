<?php
  include ("connect.php");
   include ("sessions_user.php");
  $msg = "";
?>

<html>
<head>
  <title>lol</title>
</head>
<body>
  <br>  <h1>Welcome <?php echo $_SESSION["username"]; ?>!!</h1>
  <p>Hello World</p>
  <h1>hehehheh</h1>
     <a href="logout.php" class="button"> Logout</a>
</body>
</html>
