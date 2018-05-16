<?php
include("connect.php");
session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {

 $username = mysqli_real_escape_string($db,$_POST['username']);
 $password = mysqli_real_escape_string($db,$_POST['password']);
 $query_select="select * from admin";
 $select_result= mysqli_query($db,$query_select)
   or die ('error selecting');

 while ($row=mysqli_fetch_array($select_result))
 {
   if ($row['username']==$username)
   {
     if($row['password']==$password)
     {
       $_SESSION["adminname"] = $row['username'];
       $_SESSION["adminlogin"] = TRUE;
       header("location: basic.php");
     }
     else
     {
       echo "<script type='text/javascript'>
       alert('Incorrect Password')</script>";
     }
   }
 }
 }

 echo "<script type='text/javascript'> alert('INVALID USERNAME/PASSWORD!!You are not an Admin. Unauthorised Access!')</script>";
 $URL="adminlg.php";
 echo "<script> location.href='$URL'</script>";
 mysqli_close($db);
?>
