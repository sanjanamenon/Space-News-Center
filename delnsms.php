<?php
include ("connect.php");
$id=$_GET['id'];
$name=$_GET['filename'];
$delete="delete from nsms where id='$id'";
mysqli_query($db, $delete);
unlink("NASA/".$name);
header("location: adnsms.php");

?>
