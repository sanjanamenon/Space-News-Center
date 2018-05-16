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
    background-image:url("0.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed
}
</style>
<title> About missions </title>
</head>
<body>
<p> <h2 align=center> MISSIONS </h2> <p>
<p align=center>
<table bgcolor="#2E2E2E" border="2" width="80%">
<th>1.  Lunar </th>
<tr> <td align=center> Mission Name : Chandrayaan-1 </td> </tr>
<tr> <td>
- Chandrayaan-1 was India's first lunar probe.<br>
- It was launched by the Indian Space Research Organisation in October 2008, and operated until August 2009. <br>
- The mission included a lunar orbiter and an impactor. <br>
- The mission was a major boost to India's space program, as India researched and developed its own technology in order to explore the Moon. <br>
- The vehicle was successfully inserted into lunar orbit on 8 November 2008. </td> </tr> </table> </p> <br>

<p align=center>
<table bgcolor="#610B21" border="2" width="80%">
<th> 2. Interplanetary </th>
<tr> <td align=center> Mission Name : Mars Orbiter Mission </td> </tr>
<tr> <td>
-Mars Mission (MOM), also called Mangalyaan is a spacecraft orbiting Mars since 24 September 2014. <br>
-It was launched on 5 November 2013 by the Indian Space Research Organisation (ISRO). <br>
-It is India's first interplanetary mission and ISRO has become the fourth space agency to reach Mars, after the Soviet space program, NASA, and the European Space Agency. <br>
-It is the first Asian nation to reach Mars orbit, and the first nation in the world to do so in its first attemp. </td> </tr> </table> </p> <br>



<p align=center>
<table bgcolor="#0B3B0B" border="2" width="80%">
<th> 3. Astronomy </th>
<tr> <td> <b> 3.1 Mission Name : ASTROSAT </b> <br> <hr>
- ASTROSAT is the first dedicated Indian Astronomy satellite mission launched by ISRO on 28 September 2015, which will be helpful in enable multi-wavelength observations of the celestial bodies and cosmic sources in X-ray and UV spectral bands simultaneously. </br>
- The scientific payloads cover the Visible, UV, soft and hard X-ray regimes. <br>
- The uniqueness of ASTROSAT lie in its wide spectral coverage extending over visible, UV, soft and hard X-ray regions. </td> </tr> <br> <br>
<tr> <td><b> 3.2 Mission Name : South Asia Satellite</b> <br> <hr>
- South Asia Satellite was launched on 5 May 2017. <br>
- This is a satellite which has been developed by ISRO for South Asian Nations. <br>
- Indian Prime Minister Narendra Modi announced this in November 2014 during the 18th SAARC session. </td> </tr> </table> </p> <br>


<p align=center>
<table bgcolor="#0B173B" border="2" width="80%">
<th> 4. Earth satellites </th>
<tr> <td> <b> Mission Name :  Aryabhata </b> <br> <hr>
<tr> <td>
- India's first satellite Aryabhata was launched by the Soviet Union on 19 April 1975 from Kapustin Yar using a Kosmos-3M launch vehicle.<br>
- It was built by the ISRO) to gain experience in building and operating a satellite in space.<br> </td> </tr>
<tr> <td> -India has launched 100 Indian satellites of many types as on 31 January 2018. <br>
- Satellites have been launched from various vehicles, including those launched by Russian, European and American rockets, as well as those launched indigenously by India.<br>
- ISRO also launches satellites for foreign countries. <br>
- As of March 2016, ISRO has launched 57 satellites for 21 foreign countries. <br>
- In 2016, India launched an additional 25 satellites for 6 different countries. </td> </tr> </table> </p> <br> <hr> <br>


<p> <h2 align=center>PLANNED MISSIONS </h2> <p>

<p align=center>
<table bgcolor="#61210B" border="2" width="80%">
<th> Missions planned by ISRO </th>
<tr> <td> 1. Mission Name : Chandrayaan-2 <hr>
- Chandrayaan-2 will be India's second mission to the Moon which will include an orbiter and lander-rover module.<br>
- Chandrayaan-2 will be launched on India's Geosynchronous Satellite Launch Vehicle (GSLV-MkII) in the last quarter of 2018. <br>
- The science goals of the mission are to further improve the understanding of the origin and evolution of the Moon. </td> <tr>

<tr> <td> 2. Mission Name : Aditya <hr>
- ISRO plans to carry out a mission to the Sun by the year 2019�20.<br>
- The probe is named as Aditya-1 and will weigh about 400 kg.<br>
- It is the First Indian-based Solar Coronagraph to study solar Corona in visible and near IR bands.<br>
- The main objective is to study the Coronal Mass Ejection (CME) and consequently the crucial physical parameters for space weather such as the coronal magnetic field structures, the evolution of the coronal magnetic field, etc. </td> </tr>

<tr> <td> 3. Mission Name : AVATAR <hr>
- AVATAR from "Aerobic Vehicle for Transatmospheric Hypersonic Aerospace Transportation" is a concept for a manned single-stage reusable spaceplane capable of horizontal takeoff and landing, by India's Defence Research and Development Organisation.<br>
- The mission concept is for low-cost military and commercial satellite space launches, as well as for space tourism.<br>
- The first scaled-down tests were conducted in 2016, and the first manned AVATAR flight is proposed for 2025. </td> </tr>

<tr> <td> 4. Mission Name : GSAT-11<hr>
- GSAT-11 is based on I-6K bus which is under advanced stage of development.<br>
- The spacecraft can generate 10-12 KW of power and can support payload power of 8KW.<br>
- The payload configuration is on-going.<br>
- The payload is configured to be operated as a high data throughput satellite to be released in orbit in 2018.</td> <tr>

<tr> <td> 5. Mission Name : RISAT-1A<hr>
- RISAT-1A is Radar imaging satellite, Its configuration is similar to RISAT-1.<br>
- It is a land-based mission with primary application in terrain mapping and analysis of land, ocean and water surface for soil moisture.</td> <tr>

<tr> <td> 6. Mission Name : NISAR <hr>
- Nasa-Isro Synthetic Aperture Radar (Nisar) is a joint project between NASA and ISRO to co-develop and launch a dual frequency synthetic aperture radar satellite to be used for remote sensing.<br>
- It is notable for being the first dual-band radar imaging satellite. </td> </tr>

<tr> <td> 7. Mission Name : Indian Venusian Orbiter Mission <hr>
- The Indian Venusian orbiter mission is a planned orbiter to Venus by the Indian Space Research Organisation (ISRO) to study the atmosphere of Venus. <br>
- It will be launched some time after 2020.</td> </tr> </table> </p> <hr>

</body>
</html>
