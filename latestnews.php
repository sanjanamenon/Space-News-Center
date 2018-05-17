<?php
  include ("connect.php");
   include ("sessions_user.php");
  $msg = "";
?>

<html>
<head>

<style>
body {
    background-image:url("75.jpg");
    background-repeat: no-repeat;
    background-position: right top;
    background-attachment: fixed;
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

<body text="white"> <br>
  <a href="logout.php" class="button"> Logout</a>
	<h2>Latest Space update</h2>

	 <div id="demo">
   		 <button type="button" onclick="loadDoc()">Top news</button>
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
  	  xhttp.open("GET", "iframe.php", true);
  	  xhttp.send();
	  }

  function goBack() {
      window.history.back();
  }

  </script>
  <div> <p> <h2 align="center"> Trending now! </h2> </p>

<?php
include("connect.php");
$sql = "select * from ln order by id desc";
     $result = mysqli_query($db, $sql); ?>
<table align="center" border="0" width=100%>

      <tr>
        <th> Title </th>
        <th> News No</th>
        <th> Uploaded on</th>
        <th> Files</th>
      </tr>
      <tr>

<?php
while ($row = mysqli_fetch_array($result)) {
?>


  <td> <?php echo $row['title'] ?> </td>
  <td><?php echo $row ['lnno']?></td>

  <td><?php echo $row ['dt']?></td>
<td><a href="Latest/<?php echo $row ['fileln'] ?>">View File</a></td>

</tr>
<?php
}
?>



  </table>
</div>
  <button onclick="goBack()">Go Back</button>
</body>
</html>
