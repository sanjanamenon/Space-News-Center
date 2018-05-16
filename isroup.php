<?php
  include ("connect.php");
  if(isset($_SESSION['userlogin'])){
  include ("sessions_user.php");
  }
  if(isset($_SESSION['adminlogin'])){
  include ("sessions_admin.php");
}

  $msg = "";
?>

<html>
<head>
<style>
body {
    background-image:url("11.jpg");
    background-repeat: no-repeat;

}

</style>
</head>
<body text="white">
<p> <h2> ISRO's Missions In 2018: </h2> </p>
<p>
<table border="2" width="70%">
<th> Missions planned by ISRO </th>
<tr> <td> 1. Mission Name : Chandrayaan-2 <hr>
- Chandrayaan-2 will be India's second mission to the Moon which will include an orbiter and lander-rover module.<br>
- Chandrayaan-2 will be launched on India's Geosynchronous Satellite Launch Vehicle (GSLV-MkII) in the last quarter of 2018. <br>
- The science goals of the mission are to further improve the understanding of the origin and evolution of the Moon. </td> </tr>

<tr> <td> 2. Mission Name : GSAT-11<hr>
- GSAT-11 is based on I-6K bus which is under advanced stage of development.<br>
- The spacecraft can generate 10-12 KW of power and can support payload power of 8KW.<br>
- The payload configuration is on-going.<br>
- The payload is configured to be operated as a high data throughput satellite to be released in orbit in 2018.</td> </tr> </table>

<p> <h2> ISRO's Missions In 2019: </h2> </p>
<table border="2" width="70%"> <tr> <td>Mission Name : Aditya <hr>
- ISRO plans to carry out a mission to the Sun by the year 2019�20.<br>
- The probe is named as Aditya-1 and will weigh about 400 kg.<br>
- It is the First Indian-based Solar Coronagraph to study solar Corona in visible and near IR bands.<br>
- The main objective is to study the Coronal Mass Ejection (CME) and consequently the crucial physical parameters for space weather such as the coronal magnetic field structures, the evolution of the coronal magnetic field, etc. </td> </tr> </table>

<p> <h2> ISRO's Missions In 2020: </h2> </p>
<table border="2" width="70%"> <tr> <td> Mission Name : Indian Venusian Orbiter Mission <hr>
- The Indian Venusian orbiter mission is a planned orbiter to Venus by the Indian Space Research Organisation (ISRO) to study the atmosphere of Venus. <br>
- It will be launched some time after 2020.</td> </tr> </table> </p> <hr>

</body>
</html>
