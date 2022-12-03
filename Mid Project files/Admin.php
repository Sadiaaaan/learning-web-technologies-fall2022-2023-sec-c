<?php
    if(isset($_GET['succ'])){
        echo "User Added";
        unset($_GET);
    }
?>

<!DOCTYPE html>

<head>
    <title>Admin Homepage</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="" action="" enctype="">

			<hr><hr>

		<header>
			<div align= "center">
			<h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
			</div>
		</header>

			<hr><hr>

		<nav>
			<div align= "center">
				&ensp;&ensp; 
				<a href="#" >Achivements</a>
				&ensp;&ensp;    
				<a href="#">Contact us</a>
				&ensp;&ensp; 
				<a href="#">Support</a> 
				&ensp;&ensp; 
			</div>
			<div align= "right">
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Welcome To Admin Homepage</legend>
					<ul align="center" type="square">
						<li><a href="Dashboard1.php" target="_blank"><h4>Dashboard</h4></a></li><hr>
						<li><a href="Registration.php" ><h4>Register New Employee</h4></a></li><hr>
						<li><a href="#" ><h4>Update Employees Profile</h4></a></li><hr>
						<li><a href="EmpInfo.php"><h4>Employees Information</h4></a></li><hr>
						<li><a href="PendLeave.php"><h4>Pending Leave Request</h4></a></li><hr>
					</ul>
				</fieldset>
		</main>

			<br><br><hr><hr>

<footer>
	<div align= "center">
		<a href="#">FAQ</a> &ensp;&ensp;
		<a href="#">Terms and Conditions</a> &ensp;&ensp;
		<a href="#">Privacy Policy</a> &ensp;&ensp;
		<a href="#">And More</a> &ensp;&ensp; &ensp;&ensp;
	</div>
		<br>
	<div align= "center" >
		<a href="#">&copy; 2023 | Company name </a> &ensp;&ensp;
	</div>	
</footer>

	</form>

</body>
</html>