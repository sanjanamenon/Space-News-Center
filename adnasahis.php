<?php
  include ("connect.php");
	 include ("sessions_admin.php");
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
	<img src="nasah.jpeg" width="30%" height="200px">
	<img src="nasah2.jpeg" width="30%" height="200px">
	<img src="nasah3.jpeg" width="35%" height="200px">
</marquee>

<p align=center>
<table bgcolor="#0A2A12" border="7" cellpadding="5" cellspacing="7" width="90%">
<tr> <td> - From 1946, the National Advisory Committee for Aeronautics (NACA) had been experimenting with rocket planes such as the supersonic Bell X-1.<br>
- In the early 1950s, there was challenge to launch an artificial satellite for the International Geophysical Year (1957�58).  <br>
- An effort for this was the American Project Vanguard. After the Soviet launch of the world's first artificial satellite (Sputnik 1) on October 4, 1957, the attention of the United States turned toward its own fledgling space efforts. <br>
- The US Congress, alarmed by the perceived threat to national security and technological leadership (known as the "Sputnik crisis"), urged immediate and swift action; President Dwight D. Eisenhower and his advisers counseled more deliberate measures.<br>
 -  On January 12, 1958, NACA organized a "Special Committee on Space Technology", headed by Guyford Stever. <br></td> </tr>

<tr> <td> <b>- On July 29, 1958, Eisenhower signed the National Aeronautics and Space Act, establishing NASA. </b>  <br> <hr>
- When it began operations on October 1, 1958, NASA absorbed the 43-year-old NACA intact; its 8,000 employees, an annual budget of US$100 million, three major research laboratories and two small test facilities.<br>
- A NASA seal was approved by President Eisenhower in 1959.<br>
- Elements of the Army Ballistic Missile Agency and the United States Naval Research Laboratory were incorporated into NASA. <br>
- A significant contributor to NASA's entry into the Space Race with the Soviet Union was the technology from the German rocket program led by Wernher von Braun, who was now working for the Army Ballistic Missile Agency (ABMA), which in turn incorporated the technology of American scientist Robert Goddard's earlier works.<br>
- Earlier research efforts within the US Air Force and many of ARPA's early space programs were also transferred to NASA.<br>
- In December 1958, NASA gained control of the Jet Propulsion Laboraory, a contractor facility operated by the California Institute of Technology. </td> </tr> </table>
</p>
<script>
function goBack() {
    window.history.back();
}

</script>
<button onclick="goBack()">Go Back</button>
</body>
</html>
