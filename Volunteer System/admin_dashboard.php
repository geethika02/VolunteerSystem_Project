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
			width: 70%;
			background-color: #132347;
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
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		#ui{
	font-size: 25px;
	font-family:'Potta One', cursive;
	color:white;
	position:absolute;
	top:15px;
	left:20px;
}
#lo{
	font-size: 25px;
	font-family:'Potta One', cursive;
	color:white;
	position:absolute;
	top:15px;
	right:20px;

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
#h{
			/* padding-top: 60px; */
			font-size:15px;
			font-weight: bold;
			background:#132347;
			color: aliceblue;
			height: 30px;
    		width: 120px;
			font-family: 'Potta One', cursive;
			border-color: aliceblue;
			
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
			position: absolute;
			left: 30px;
			border-color: aliceblue;
		}
		#ph,#h {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
#ph span ,#h span{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

		#ph:hover,#h:hover{
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
#ph:hover span:after,#h:hover span:after {
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

#ph:active,#h:active{
  background-color: #030C0C;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
b{
	
	font-size: 20px;
	font-family:'Potta One', cursive;
	color:white;
}
	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<div id="header"><br>
	<a id="ui" href="admin_dashboard.php">Admin Panel</a>
	<center>
		<h6 id="el">Email: <?php echo $_SESSION['email'];?></h6><h6 id="n">Name: <?php echo $_SESSION['name'];?> </h6>
		</center>
		<a id="lo" href="logout.php">Logout</a>
		
	</div>
	
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td><br><br>
						<input id="ph" type="submit" name="search_student" value="Search User">
					</td>
				</tr>
				<tr>
					<td><br><br><br>
						<input id="ph" type="submit" name="edit_student" value="Edit User">
					</td>
				</tr>
				<tr>
					<td><br><br><br>
						<input id="ph" type="submit" name="add_new_student" value="Add New User">
					</td>
				</tr>
				<tr>
					<td><br><br><br>
						<input id="ph" type="submit" name="delete_student" value="Delete User">
					</td>
				</tr>
				<tr>
					<td><br><br><br>
						<input id="ph" type="submit" name="show teacher" value="Show Volunteers">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!--  search student-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					<h4><b><u>User's Details</u></b></h4><br><br>
					&nbsp;&nbsp;<b>Enter Aadhar No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input id="h" type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table>

							<tr>
								<td>
									<b>Aadhar No:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['roll_no']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Name:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Occupation:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['father_name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Ration Card Number:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['class']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Mobile:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['mobile']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="password" value="<?php echo $row['password']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Government Schemes</b>
								</td> 
								<td>
									<textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
								</td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		<!--  edit student -->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<h4><b><u>User's Details</u></b></h4><br><br>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Aadhar No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input id="h" type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_student.php" method="post">
					<center>
						<table>
						<tr>
							<td>
								<b>Aadhar No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Occupation:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Ration Card Number:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Government Schemes:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"><?php echo $row['remark']?></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input id="h" type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</center>
					</form>
					<?php
				}
			}
		?>
		<!--  Delete student -->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<h4><b><u>Delete User's Details</u></b></h4><br><br>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Aadhar No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input id="h" type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4><b>Fill the given details</b></h4></center>
					<form action="add_student.php" method="post">
					<center>
						<table>
						<tr>
							<td>
								<b>Aadhar No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Occupation:</b>
							</td> 
							<td>
								<input type="text" name="father_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Ration Card Number:</b>
							</td> 
							<td>
								<input type="text" name="class" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Government Schemes:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input id="h" type="submit" name="add" value="Add User"></td>
						</tr>
					</table>
					</form>
					</center>
					<?php
				}
			?>
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h5><b>VOLUNTEER'S DETAILS</b></h5><br>
						<table>
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Mobile</b></td>
								<td id="td"><b>Area</b></td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['t_id']?></td>
								<td id="td"><?php echo $row['name']?></td>
								<td id="td"><?php echo $row['mobile']?></td>
								<td id="td"><?php echo $row['courses']?></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>