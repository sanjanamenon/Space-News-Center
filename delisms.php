<?php
include ("connect.php");
$id=$_GET['id'];
$name=$_GET['filename'];
$delete="delete from isms where id='$id'";
mysqli_query($db, $delete);
unlink("ISRO/".$name);
header("location: adisms.php");

?>
