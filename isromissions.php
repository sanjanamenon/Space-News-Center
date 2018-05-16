<?php
  include ("connect.php");
   include ("sessions_user.php");
  $msg = "";
?>

<html>
<head>
<title> ISRO Missions </title>
<style>
body {
    background-image:url("75.jpg");
    background-repeat: no-repeat;
    background-position: right top;
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

<body bgcolor="black" text="white">
<a href="logout.php" class="button"> Logout</a>
<p> <h1 align=center><font color="orange"> ISRO MISSIONS </font> </h1>
<p align=center> The Indian Space Research Organisation has carried out <b> 84 spacecraft missions, 59 launch missions</b> and planned many missions including Chandrayaan-2, and Aditya (spacecraft).</p> <br>

<p align=center>
<font color="red">Missions can be categorized into: </font>

<table border="1" width="50%" cellpadding="4" cellspacing="5">
		<th> 1.Lunar</th>
		<th> 2.Interplanetary</th>
		<th>3.Astronomy</th>
		<th> 4.Earth satellites </th> </table> <br> <br>

<font color="red">	Planned Missions<br> </font>
<table border="1" width="70%" cellpadding="4" cellspacing="5">
		<th>1. Chandrayaan-2 </th>
		<th> 2.  Aditya </th>
		<th>3. AVATAR </th>
		<th>4. GSAT-11 </th>
		<th> 5.  RISAT-1A </th>
		<th> 6. NISAR </th>
		<th>7. Indian Venusian Orbiter Mission</th> <table> <br> </p>

<h2>Know in detail </h2> <br>
<div id="demo">
	<button type="button" onclick="loadDoc()"> See more </button>
 </div>

 <script>
    function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200)
          {
         document.getElementById("demo").innerHTML = this.responseText;
          }
      };
    xhttp.open("GET", "isroms.php", true);
    xhttp.send();
  }
function goBack() {
    window.history.back();
}

</script>
<div><h2 align=center> Trending Now!</h2>
<br><br>
<?php
include("connect.php");
$sql = "select * from isms order by id desc";
   $result = mysqli_query($db, $sql); ?>
<table align="center" border="2" width=100%>

    <tr>
      <th> Title </th>
      <th> Mission No</th>
      <th> Uploaded on</th>
      <th> Files</th>
    </tr>
    <tr>

<?php
while ($row = mysqli_fetch_array($result)) {
?>


<td> <?php echo $row['title'] ?> </td>
<td><?php echo $row ['msno']?></td>

<td><?php echo $row ['dt']?></td>
<td><a href="ISRO/<?php echo $row ['fileisms'] ?>">View File</a></td>

</tr>
<?php
}
?>



</table>
</div>
<button onclick="goBack()">Go Back</button>
</body>
</html>
