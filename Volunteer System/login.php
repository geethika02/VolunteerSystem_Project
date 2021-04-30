<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	
	body{
		background-color:#242943 ;
	}
		h3{
			font-size: 50px;
			font-weight: bold;
			font-family: 'Potta One', cursive;
			color: #1fcfb1;
		}
		h3{
			position: absolute;
  left: 335px;
  top: 45px;
		}
		#al,#ul{
			/* padding-top: 60px; */
			font-size:20px;
			background:#132347;
			color: aliceblue;
			height: 50px;
    		width: 250px;
			font-family: 'Potta One', cursive;
			border-color: aliceblue;
		}
		#al,#ul {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
#al span,#ul span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

		#al:hover,#ul:hover{
			background: aliceblue;
			color: #132347;
		}
		#al span:after,#ul span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
#ul:hover span,#al:hover span {
  padding-right: 25px;
}
#ul:hover span:after,#al:hover span:after {
  opacity: 1;
  right: 0;
}

#ul:active,#al:active {
  background-color: aliceblue;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#al {
  position: absolute;
  right: 505px;
  top: 220px;
  animation: geet 3s ease-in-out forwards;
}
#ul {
  position: absolute;
  right: 505px;
  top: 360px;
  animation: geeth 3s ease-in-out forwards;
}
#ig{
position:absolute;
top:265px;
}
@keyframes geethu {
		0% {
			/* right: -4em; */
			top: -4em;
			opacity: 0;
		}
		100% {

			top: 220px;
			opacity: 1;
			right: 505px;
		}
	}
	@keyframes geeth {
		0% {
			/* right: -4em; */
			top: 360px;
			opacity: 0;
		}

		100% {
			top: 360px;
			opacity: 1;
			right: 505px;
		}
	}

	@keyframes geet {
		0% {
			/* right: -4em; */
			top: 220px;
			opacity: 0;
		}

		100% {
			top: 220px;
			opacity: 1;
			right: 505px;
		}
	}

	#nav
{
	background: #242943;
	height:70px;
	width:100%;
	line-height: 60px;
	animation: geethu 3.5s ease-in-out forwards;
	border:aliceblue;
}
#nav h1{
	float: left;
}
#nav h1 a{
	position: absolute;
	text-decoration: none;
	color: white;
	font-family: 'Potta One', cursive;
	margin-left: 25px;
	top:10px;
}
#nav ul{
	float: right;
}
#nav ul li{
	text-decoration: none;
	list-style-type: none;
	display: inline-block;
}
#nav ul li a{
	text-decoration: none;
	color: white;
	font-weight: bold;
	font-family: 'Potta One', cursive;
	padding: 25px;
}
#nav ul li :hover{
	background: aliceblue;
	color: #132347;
	transition: all ease-in-out 0.40s;
}
#ll{
	position: absolute;
	top: 265px;
	left: 980px;
}

</style>
</head>
<body >
<div id="nav">
		
		<img id="ml" src="vol.png"  height="70" width="70" align="left"> 
		<h1><a href="login.php">Volunteer System<BR CLEAR="left" /></a></h1>
    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="contact.html">CONTACT US</a></li>
        
          <li><a href="login.php">LOGIN</a></li>
		  <hr style="height:2px;border-width:0;color:gray;background-color:white">
    </li>
    </ul>
	
</div>
	<center><br><br><br></br>
	<form action="" method="POST" id="lf">
		<br></br>
		<input id="al" type="submit" name="admin_login" value="ADMIN  LOGIN" required>
		<br></br>
		<br></br>
		<input id="ul" type="submit" name="student_login" value="USER  LOGIN" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
	
</body>
</html>