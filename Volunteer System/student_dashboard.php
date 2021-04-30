<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
		background-image: url('hp.jpg');
	}
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: #132347;
			position: fixed;
			color: white;
			border: solid 1px white;
			
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			font-family:Verdana, Geneva, Tahoma, sans-serif;
			width: 70%;
			background-color:#132347;
			position: fixed;
			left: 25%;
			top: 21%;
			color: rgb(26, 211, 195);
			border: solid 1px white;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		#ph{
			/* padding-top: 60px; */
			font-size:20px;
			font-weight: bold;
			background:#132347;
			color: aliceblue;
			height: 50px;
    		width: 250px;
			font-family: 'Potta One', cursive;
			position:absolute;
			top:220px;
			left:40px;
			border-color: aliceblue;
		}
		#ph {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
#ph span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

		#ph:hover{
			background: aliceblue;
			color: #132347;
		}
		#ph span:after,#ul span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
#ph:hover span {
  padding-right: 25px;
}
#ph:hover span:after {
  opacity: 1;
  right: 0;
}
#ui{
	font-size: 25px;
	font-family:'Potta One', cursive;
	color:white;
	position:absolute;
	top:15px;
	left:20px;
}

#ph:active, {
  background-color: #030C0C;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#lo{
	font-size: 25px;
	font-family:'Potta One', cursive;
	color:white;
	position:absolute;
	top:15px;
	right:20px;

}
b{
	
	font-size: 20px;
	font-family:'Potta One', cursive;
	color:white;
}
#el{
	font-size: 20px;
	font-family:'Potta One', cursive;
	color:white;
	position:absolute;
	top:20px;
	right:600px;
}
#n{
	font-size: 20px;
	font-family:'Potta One', cursive;
	color:white;
	position:absolute;
	top:20px;
	right:400px;
}

	</style>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
		<a id="ui" href="student_dashboard.php">User Information</a>
	<center>
		<h6 id="el">Email: <?php echo $_SESSION['email'];?> </h6><h6 id="n">Name: <?php echo $_SESSION['name'];?></h6> 
	</center>
		<a id="lo" href="logout.php">Logout</a>
	
	</div>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			<table>
				<tr>
					<td>
						<input id="ph" type="submit" name="show_detail" value="Show Details">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<center>
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<table>
					<tr>
						<td>
							<b>Aadhar No:</b>
						</td> 
						<td>
							<input id="bx" type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input id="bx" type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Ration Card Number:</b>
						</td> 
						<td>
							<input id="bx" type="text" value="<?php echo $row['father_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Occupation:</b>
						</td> 
						<td>
							<input id="bx" type="text" value="<?php echo $row['class']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input id="bx" type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input id="bx" type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input id="bx" type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Government Schemes:</b>
						</td> 
						<td>
							<textarea id="bx" rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
						</td>
					</tr>
				</table>
				<?php
				}	
			}
			?></center>
		</div>
	</div>
</body>
</html>