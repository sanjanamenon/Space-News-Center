<?php
include ("connect.php");
$id=$_GET['id'];
$name=$_GET['filename'];
$delete="delete from ln where id='$id'";
mysqli_query($db, $delete);
unlink("Latest/".$name);
header("location: adln.php");

?>
