<?php
$db = mysqli_connect('localhost', 'root', '123456');
if (!$db){
    die("Database Connection Failed".mysqli_error($db));
}
$select_db = mysqli_select_db($db, 'space');
if (!$select_db){
    die("Database Selection Failed".mysqli_error($db));
}
?>
