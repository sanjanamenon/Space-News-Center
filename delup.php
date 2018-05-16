<?php
include ("connect.php");
$id=$_GET['id'];
$name=$_GET['filename'];
$delete="delete from upcoming where id='$id'";
mysqli_query($db, $delete);
unlink("Upcoming/".$name);
header("location: adupcmng.php");

?>
