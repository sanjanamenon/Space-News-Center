<?php
 include ("connect.php");
 include ("sessions_admin.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Upload page</title>
<style>


html,body {
  background-image:url("7.jpg");
  background-repeat: no-repeat;
}

a {
  text-decoration: none;
}

div#header {
  width: 100%;
  height: 15%;
  background-color: white;
  margin: 0 auto;
}

.button {
  float: right;
  color:  black;
  padding: 5px 10px;
  border-radius: 12px;
  margin-top: 1ex;
  margin-right: 20px;
  font-size: 15px;
  cursor: pointer;
  background-color: #ccc;
  border: 2px solid black
}

.button#tada {
  float: left;
  color: white;
  padding: 5px 20px;
  width: 100%;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  background-color:#ff8a00;
  border: 2px solid #ff8a00;
}

.button#tadada {
  float: left;
  color: white;
  padding: 5px 20px;
  width: 100%;
  border-radius: 6px;
  font-size: 15px;
  cursor: pointer;
  background-color:#00afba;
  border: 2px solid #00afba;
}

div#container {
  height: 92%;
  width: 100%;
  margin-left: 0 auto;

}

ul#nav h2 {
   color: white;
   text-align: center;
   padding: 10px;
   font-size: 1em;
   width: 100%;
   border-bottom: 1px solid #444;
}

ul#nav li {
	list-style: none;
  height:10px;

}
ul#nav li span{
  position:relative;
}
ul#nav li span img {
	float: left;
  display: block;
  margin-left: 1px;
  margin-top: 2px;
}
ul#nav li a {
	color: #ccc;
	display: block;
	padding: 10px;
	font-size: 0.8em;
	width: 100%;
	float: left;
	border-bottom: 1px solid #444;
	-webkit-transition: all 0.2s ease;
	-moz-transition: all 0.2s ease;
	-ms-transition: all 0.2s ease;
	-o-transition: all 0.2s ease;
	transition: all 0.2s ease;
}

ul#nav li a:hover {
  background: #030303;
  color: #fff;
}

ul#nav li a.selected{
  background: #030303;
  color:#fff;
}


.content p {
  color: #424242;
  font-size: 0.8em;
}

table{
  margin-left: ;
  margin-right: ;
  width: 40%;
  height: 10%;
  border-collapse: collapse;
}
th{
  padding: 1px;
  border-bottom:3px solid #ddd;
  background-color: black;
  color: white;
}

td{

    background-color:;
    padding: 1px;
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

  <div class="content">
          <h1>Upload Panel</h1>
          <h4>Upload files</h4>
            <form method="post" action="adupcmng.php" enctype="multipart/form-data" >
                    <table align="center">

                    <tr>
                      <th colspan="2"> Upcoming Launches </th>
                    </tr>

                    <tr>
                      <td> Filename: <input type="text" name="title" class="title" maxlength="25" required> </td><td>Launch No: <input type="text" name="upno" class="upno" maxlength="25" required></td><br>
                    </tr>
                    <tr>
                      <td><input type="file" name="fileup" /> </td><td>
<button type="submit" name="btn-upload">upload</button> </td><br>
                    </tr>

                    </table>
                    </form>

                    <br><form method="post" action="adln.php" enctype="multipart/form-data">
                            <table align="center">

                            <tr>
                              <th colspan="2"> Latest News</th>
                            </tr>

                            <tr>
                              <td> Filename: <input type="text" name="title" class="title" maxlength="25" required> </td><td>
  News No: <input type="text" name="lnno" class="lnno" maxlength="25" required></td><br>
                            </tr>
                            <tr>
                              <td><input type="file" name="fileln"/></td><td>
<button type="submit" name="btn-upload">upload</button> </td>


                            </table>
                            </form>
                            <form method="post" action="adisms.php" enctype="multipart/form-data">
                                    <table align="center">

                                    <tr>
                                      <th colspan="2"> ISRO MISSIONS </th>
                                    </tr>

                                    <tr>
                                      <td> Filename: <input type="text" name="title" class="title" maxlength="25" required> </td> <td>
                                       Mission no: <input type="text" name="msno" class="msno" maxlength="25" required></td><br>
                                    </tr>
                                    <tr>
                                      <td> <input type="file" name="fileisms" /></td><td>
<button type="submit" name="btn-upload">upload</button></td>
                                      <br>
                                    </tr>

                                    </table>
                            </form>
                              <form method="post" action="adnsms.php" enctype="multipart/form-data">
                                <table align="center">

                                  <tr>
                                      <th colspan="2"> NASA MISSIONS </th>
                                  </tr>

                                  <tr>
                                    <td> Filename: <input type="text" name="title" class="title" maxlength="25" required> </td> <td>
                                               Mission no: <input type="text" name="msno" class="msno" maxlength="25" required></td><br>
                                  </tr>
                                  <tr>
                                    <td> <input type="file" name="filensms" /></td><td>
        <button type="submit" name="btn-upload">upload</button></td>
                                              <br>
                                  </tr>

                                  </table>
                                            </form>


        </div>


    </div>


</body>
</html>
