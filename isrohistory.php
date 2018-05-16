<?php
  include ("connect.php");
   include ("sessions_user.php");
  $msg = "";
?>

<html>
<head>
<title> ISRO HISTORY </title>
<style>
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
<p><h2> A brief history about the organistion: </h2></p>
<marquee direction="right">
	<img src="isro2.jpg" width="30%" height="200px">
	<img src="isro3.jpg" width="30%" height="200px">
	<img src="isro1.png" width="30%" height="200px">
</marquee>

<p align=center> <i>
<table bgcolor="#0B0B3B" border="7" cellpadding="4" cellspacing="3" width="90%">
<tr> <td>- Modern space research in India is most visibly traced to the 1920s, when the scientist S. K. Mitra conducted a series of experiments leading to the sounding of the ionosphere by application of ground based radio methods in Calcutta.<br>
- Later, Indian scientists like C.V. Raman and Meghnad Saha contributed to scientific principles applicable in space sciences.<br>
- However, it was the period after 1945 that saw important developments being made in coordinated space research in India.<hr>
<b>  - Organised space research in India was spearheaded by two scientists: <br>
		 1. Vikram Sarabhai: founder of the Physical Research Laboratory at Ahmedabad <br>
		 2. Homi Bhabha: who established the Tata Institute of Fundamental Research in 1945. </td> </tr></b>

<tr> <td> - Initial experiments in space sciences included the study of cosmic radiation, high altitude and airborne testing of instruments, deep underground experimentation at the Kolar mines, one of the deepest mining sites in the world � and studies of the upper atmosphere.<br>
- Studies were carried out at research laboratories, universities, and independent locations. </td> </tr>

<tr> <td> - In 1950, the Department of Atomic Energy was founded with Homi Bhabha as its Secretary.<br>
- The Department provided funding for space research throughout India.<br>
- During this time, tests continued on aspects of meteorology and the Earth's magnetic field, a topic that was being studied in India since the establishment of the observatory at Colaba in 1823. <br>
- In 1954, the Uttar Pradesh state observatory was established at the foothills of the Himalayas.<br>
- The Rangpur Observatory was set up in 1957 at Osmania University, Hyderabad. Space research was further encouraged by the technically inclined Prime Minister of India, Jawaharlal Nehru. <br>
- In 1957, the Soviet Union successfully launched Sputnik and opened up possibilities for the rest of the world to conduct a space launch.<br>
- The Indian National Committee for Space Research (INCOSPAR) was set up in 1962 by Jawaharlal Nehru, India's first Prime Minister </i> </tr> </td> </table>
</p>
<script>
function goBack() {
    window.history.back();
}

</script>
  <button onclick="goBack()">Go Back</button>
</body>
</html>
