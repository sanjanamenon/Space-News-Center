<?php
  include ("connect.php");
   include ("sessions_admin.php");
  $msg = "";
?>
<html>
<head>
<br>
<style>
body {
    background-image:url("11.jpg");
    background-repeat: no-repeat;
}
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
<div>
<a href="logout.php" class="button"> Logout</a>
<h1 align="center"> WELCOME TO THE SPACE NEWS CENTER </h1>
</div>
<p align=center>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	.btn {
   	 border: none;
   	 color: white;
    	padding: 14px 60px;
   	 font-size: 16px;
    	cursor: pointer;
		}

.launches {background-color: #088A08;} /* Green */
.launches:hover {background-color: #64FE2E;}

.news {background-color: #0404B4;} /* Blue */
.news:hover {background:#8181F7 ;}

.ISRO {background-color: #8A0808;} /*Red */
.ISRO:hover {background:#F78181;}

.NASA {background-color: #088A85 ;} /* Turquoise */
.NASA:hover {background:#81F7F3;}

.FactsnMyths {background-color: #DF013A;} /* Pink*/
.FactsnMyths:hover {background: #F5A9BC;}

.Uploads {background-color: #F76520 ;} /* Orange*/
.Uploads:hover {background: #FFA981 ;}

</style>
</head>

<body bgcolor="black" text="white">

<a href="adupcmng.php"
	 button class="btn launches">Upcoming launches</button>

<a href="adln.php"
	button class="btn news">Latest News</button>

<a href="adisro.php"
	button class="btn ISRO">ISRO</button>

<a href="adnasa.php"
	button class="btn NASA">NASA</button>

<a href="adfandm.php"
  	button class="btn FactsnMyths"> FactsnMyths</button> </a>

<a href="upload.php"
    button class="btn Uploads"> Upload</button> </a> <hr>

<br>

<p align=center>
 <font color="white"> <i> <h2 align=center> Trending now </h2></i> </font color> <br> </p>


<p align=center>
<table border="1" width="80%" cellpadding="4" cellspacing="5">
<th>Know the Orion Nebula</th>
<th> Ares 1-x prime abort mission scenario launch </th>

	<tr> <td><align="center"><video width="500" controls>
  	<source src="1.mp4" type="video/mp4">
 	</video> </td>


	<td><align="center"><video width="500" controls>
  	<source src="2.mp4" type="video/mp4">
 	</video> </td> </tr>

	<tr> <td>The Orion Nebula (also known as Messier) is a diffuse nebula situated in the Milky Way, being south of Orion's Belt in the constellation of Orion.<br> It is one of the brightest nebulae, and is visible to the naked eye in the night sky.<br> M42 is located at a distance of 1,344 � 20 light years and is the closest region of massive star formation to Earth </td>
	<td> Ares I was the crew launch vehicle that was being developed by NASA as part of the Constellation program.<br> The name "Ares" refers to the Greek deity Ares, who is identified with the Roman god Mars. Ares I was originally known as the "Crew Launch Vehicle".</td> </tr> </table>
</p>
</body>
</html>
