<?php
  include ("connect.php");
   include ("sessions_admin.php");
  $msg = "";
?>

<html>
<head>
  <style>
  body {
      background-image:url("11.jpg");
      background-repeat: no-repeat;
  }
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

<body text="white">
<a href="logout.php" class="button"> Logout</a>
<h2 align=center> Best Space Books and Sci-Fic Reading List. </h2> <br>

<p> There are plenty of great books out there about space so many, in fact, that it can feel a little overwhelming to figure out where to start, whether searching for a perfect holiday gift or your next engrossing read.<br>
 So the editors and writers at Space.com have put together a list of their favorite books about the universe.<br>
These are the books that we love the ones that informed us, entertained us and inspired us.<br>
 We hope they'll do the same for you for this Black Friday and beyond!<br> <br> </p>

 <b> We've divided the books into four categories : </b> <br> <br>
<a href="b1.php"> 1. Space Books for Kids </a> <br>
<a href="b2.php"> 2. Astronomy and Astrophysics</a> <br>
<a href="b3.php"> 3. Space Photography</a> <br>
<a href="b4.php"> 4. Science Fiction </a> <br> </p>

<script>
function goBack() {
    window.history.back();
}

</script>
<button onclick="goBack()">Go Back</button>
</body>
</html>
