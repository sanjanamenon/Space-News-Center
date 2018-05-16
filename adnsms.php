<?php
  include ("connect.php");
   include ("sessions_admin.php");
  $msg = "";

    if (isset($_POST['btn-upload'])) {
      $target = "NASA/".basename($_FILES['filensms']['name']);
      $filensms = $_FILES['filensms']['name'];
      $error = $_FILES['filensms']['error'];
      $title = mysqli_real_escape_string($db, $_POST['title']);
      $msno = mysqli_real_escape_string($db, $_POST['msno']);
      $dt = @date('Y-m-d');
     $sql = "insert into nsms(filensms,msno,title,dt) values ('$filensms','$msno','$title','$dt')";
      mysqli_query($db, $sql);

      if (move_uploaded_file($_FILES['filensms']['tmp_name'],$target)) {

        $msg = "The Missions were uploaded successfully";
        echo "<script type='text/javascript'>alert('$msg');window.location.href='upload.php';</script>";

      }
      else{

        $msg = "Failed to upload the Missons";
        echo "<script type='text/javascript'>alert('$msg');window.location.href='upload.php';</script>";

      }

    }

  ?>
  <html>
  <head>
  <title> NASA Missions </title>
  <style>
  body {
      background-image:url("75.jpg");
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

  <body bgcolor="black" text="white">
  <a href="logout.php" class="button"> Logout</a>
  <p> <h1 align=center><font color="orange"> NASA MISSIONS </font> </h1>
  <p align=center> A list of NASA missions, both manned and unmanned, since its establishment in 1958.</p> <br>

  <p align=center>
  <font color="red"><b>Missions can be categorized into: </b></font>

  <table border="2" width="100%" cellpadding="6" cellspacing="5">
  		<th>1	X-Plane program </th>
  		<th>2	Crewed missions </th>
  		<th>3	Robotic missions </th>
  		<th>4	Planned missions </th>
  		<th>5	Cancelled or undeveloped missions </th>

  		<tr>
        <td></td>
        <td>2.1	Human spaceflight<br>
  			2.2	Future </td>
  		  <td>3.1	Suborbital <br>
  			3.2	Earth satellites<br>
  			3.3	Lunar <br>
  			3.4	Martian <br>
  			3.5	Asteroidal/cometary <br>
  			3.6	Other planets<br>
  			3.7	Solar </td>
        <td></td>
        <td></td>
      </tr></table><br><br></p>

  <h2 align="center">Know in detail  <br>
  <div id="demo">
  	<button type="button" onclick="loadDoc()"> See more </button>
  </div></h2>

   <script>
      function loadDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200)
            {
           document.getElementById("demo").innerHTML = this.responseText;
            }
        };
      xhttp.open("GET", "nasams.php", true);
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
$sql = "select * from nsms order by id desc";
     $result = mysqli_query($db, $sql); ?>
<table align="center" border="0" width=100%>

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
<td><a href="NASA/<?php echo $row ['filensms'] ?>">View File</a> <a href="delnsms.php?id=<?php echo $row['id']?>&filename=<?php echo $row['filensms'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">    /Delete File   </a></td>

</tr>
<?php
}
?>



  </table>
</div>
  <button onclick="goBack()">Go Back</button>

  </body>
  </html>
