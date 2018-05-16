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
<title> About missions </title>
<style>
body {
    background-image:url("nm.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head>

<body>


<p> <h2 align=center>1. X-Plane program</h2> </p>
<p align=center>
<table bgcolor="#610B0B" border="2" width="80%">

<tr> <td align=center> Mission Name : The Bell X-1 </td> </tr>
<tr> <td>
- Since 1945, NASA have conducted the X-Plane Program. <br>
- The program was originally intended to create a family of experimental aircraft not intended for production beyond the limited number of each design built solely for flight research. <br>
- The first X-Plane, the Bell X-1, was the first rocket-powered airplane to break the sound barrier on October 14, 1947. <br>
- X-Planes have set numerous milestones since then, both manned and unmanned. </td> </tr> </table> </p> <br>



<p> <h2 align=center>2. Crewed missions</h2> </p>

<p align=center>
<table bgcolor="#3B0B39" border="2" width="80%">

<tr> <td> <b> 3.1 Mission Name : Human spaceflight  </b> <br>  NASA has successfully launched over 200 manned flights </td> </tr> </table>

<table bgcolor="#3B0B39" border="2" width="80%">
<tr>
    <th>Program</th>
    <th>Started in</th>
    <th>Detail</th>
  </tr>

 <tr>
    <td>Mercury program</td>
    <td align=center>1959</td>
    <td>First U.S. crewed program</td>
  </tr>
  <tr>
    <td>Gemini program</td>
    <td align=center>1963</td>
    <td>Program used to practice space rendezvous and EVAs.</td>
  </tr>
  <tr>
    <td>Apollo program</td>
    <td align=center>1961</td>
    <td>Brought first human to the Moon.</td>
  </tr>
<tr>
    <td>Shuttle-Mir Program</td>
    <td align=center>1995</td>
    <td>Russian partnership</td>
  </tr>
<tr>
    <td>Project Constellation</td>
    <td align=center>2003</td>
    <td>Cancelled program to bring humans to the Moon again.</td>
  </tr>
<tr>
    <td>Space Shuttle</td>
    <td align=center>2011</td>
    <td>First missions in which a spacecraft was reused</td>
  </tr>
</table> </p> <br>

<p align=center>
<table bgcolor="#3B0B39" border="2" width="80%">
<th>2.2. Future program </th>
<tr> <td align=center> Mission Name :  Orion MPCV </td> </tr>
<tr> <td>
- NASA brought the Orion MPCV back to life from the defunct Constellation Program and successfully test launched the first capsule on December 5, 2014 aboard EFT-1 <br>
- After a near perfect flight traveling 3600 miles above Earth, the spacecraft was recovered for study. <br>
-NASA plans to use the Orion crew vehicle to send humans to deep space locations such as the Moon, Near Earth Asteroids, and Mars starting in the 2020s. <br>
- Orion will be powered by NASA's new heavy lift vehicle, the Space Launch System (SLS), which is currently under development.  </td> </tr> </table> </p> <br>



<p> <h2 align=center>3. Robotic missions</h2> </p>

<p align=center>
<table border="2" width="80%">

<tr bgcolor="#0A0A2A"> <td>
	3.1: Suborbital <br>
		Anomalous Transport Rocket Experiment (ATREX)- five consecutive launches, 80 seconds apart on March 27, 2012, studied the high-altitude jet stream.<br>  </td> </tr>

<tr bgcolor="#21610B"> <td>
	 3.2 Earth satellites <br> <br>
		a) NASA earth satellites <br>
			1. NASA earth satellites <br>
			2. Biosatellite 1, 2 and 3 <br>
			3. Cosmic Background Explorer (COBE) <br> <hr>

		b) Earth Observing System<br>
			1. Gravity Recovery and Climate Experiment (GRACE)<br>
			2. NPOESS Preparatory Project (NPP)- National Polar-orbiting Operational Environmental Satellite System (NPOESS)<br>
			3. Upper Atmosphere Research Satellite (UARS)<br>
			4. Echo 1 and 2 <br> <hr>

		c) Great Observatories<br>
			1. Chandra X-ray Observatory<br>
			2. Compton Gamma Ray Observatory<br>
			3. Hubble Space Telescope- ESA partnership<br>
			4. Spitzer Space Telescope(SIRTF)<br> <hr>

		d)High Energy Astronomy Observatory program<br>
			High Energy Astronomy Observatory 1 (HEAO 1)<br>
			Einstein Observatory (HEAO 2) first fully imaging X-ray telescope<br>
			High Energy Astronomy Observatory 3 (HEAO 3)<br>
			Jason-3<br>
			Landsat program<br>
			Landsat 1-Landsat 7<br>
			Landsat Data Continuity Mission<br><hr>

		e) Living With a Star<br>
			Van Allen Probes <br>
			Multi-angle Imaging SpectroRadiometer (MISR)<br><hr>

		f) New Millennium Program (NMP)<br>
			Earth Observing-1 (EO-1)<br>
			Space Technology 5 (ST5)<br>
			NanoSail-D & NanoSail-D2<br>
			Orbiting Carbon Observatory (OCO)<br><hr>

		g) Origins program<br>
			Far Ultraviolet Spectroscopic Explorer (FUSE)<br>
			Kepler searching for Earth-sized exoplanets in the habitable zone<br> </td> </tr>



<tr bgcolor="#424242"> <td>
	3.3 Lunar <br> <br>

		a) Lunar Orbiter program<br>
			Lunar Orbiter 1- Lunar Orbiter 5<br><hr>

		b) Lunar Precursor Robotic Program (LPRP)<br>
			Lunar Crater Observation and Sensing Satellite (LCROSS)<br>
			Lunar Reconnaissance Orbiter (LRO)<br>
			Lunar Prospector<br>
			Moon Mineralogy Mapper (M3) - instrument for ISRO's Chandraayan-1<br><hr>

		c)Pioneer program<br>
			Pioneer 0-Pioneer 4<br><hr>

		d)Ranger program<br>
			Ranger 1-Ranger 9<br><hr>

 		e)Surveyor program<br>
			Surveyor 1- Surveyor 7<br></td> <tr>
<tr  bgcolor="#8A0808"> <td>
	3.4 Martian<br> <br>

		a)Mariner program<br>
			Mariner 4-Mariner 9<br><hr>

		b)Mars Exploration Rovers<br>
			Spirit rover<br>
			Opportunity rover<br>
			Mars Odyssey<br><hr>

		c)Viking program<br>
			Viking 1<br>
			Viking 2<br> </td> </tr>

<tr bgcolor="#0B3861"> <td>
	3.5Asteroidal<br> <br>

		a)Discovery Program<br>
			Deep Impact (primary) - EPOXI (extended)<hr>

		b)New Millennium Program (NMP)<br>
			Deep Space 1 (DS1) - first spacecraft propelled by an Ion thruster<br>
			Near Earth Asteroid Rendezvous - Shoemaker<hr>

		c)New Frontiers program<br>
			Origins Spectral Interpretation Resource Identification Security Regolith Explorer <br>
			Stardust-follow-up for Deep Impact's primary mission to 9P/Tempel<br>  </td> <tr>
<tr bgcolor="#8A2908"> <td>
	3.6 Other planets <br> <br>
		Cassini-Huygens-Saturn and its moons<br>
		Dawn -Vesta in 2011-2012, and Ceres in 2015<br>
		Galileo - Jupiter and its moons<br>
		Juno - Jupiter<br>
		Magellan (Venus Radar Mapper)<br>
		Mariner 10 - first to Mercury<br>
		New Horizons - Pluto and its moons in 2015<br>
		Pioneer Venus project<br>
		Voyager 1 - Jupiter, Saturn<br>
		Voyager 2 - Jupiter, Saturn, first to Uranus and Neptune<br> <td> <tr>

<tr bgcolor="#8A0829"> <td>
	3.7 Solar <br> <br>

		a)Living With a Star<br>
			Balloon Array for RBSP Relativistic Electron Losses (BARREL) <br>
			Solar Dynamics Observatory (SDO)<br>
			Solar and Heliospheric Observatory (SOHO) - ESA partnership<br>
			Solar Maximum Mission (SolarMax)<br><hr>

		b)Solar Terrestrial Probes program<br>
			Magnetospheric Multiscale Mission (MMS) <br>
			Solar TErrestrial RElations Observatory (STEREO)<br>
			Ulysses (spacecraft) - ESA partnership<br> <td> <tr> </table> </p>



<p> <h2 align=center>4. Plannes Missions</h2> </p>
<p align=center>
<table bgcolor="#424242" border="2" width="80%">

<tr> <td> Mission Name :<br>
1. InSight <br>
Mars lander planned for launch in 2018. <br> <hr>

2.Parker Solar Probe <br>
Is expected to be the first mission into the Sun's corona, slated to launch in 2018.</td> </tr> </table> </p>


<p> <h2 align=center> 5. Cancelled or undeveloped missions</h2> </p>
<p align=center>
<table bgcolor="#0B0719" border="2" width="80%">

<tr> <td> Comet Rendezvous Asteroid Flyby (CRAF)<br>
Jupiter Icy Moons Orbiter (JIMO)<br>
Mars Astrobiology Explorer-Cacher (MAX-C)<br>
Mars Telecommunications Orbiter (MTO)</td> </tr> </table>

</body>
</html>
