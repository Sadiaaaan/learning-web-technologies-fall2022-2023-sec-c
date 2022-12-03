<!DOCTYPE html>

<head>
    <title>Project Model Selection</title>
</head>

<body bgcolor="LIGHTGRAY">
	<?php 
		session_start();
		if(isset($_POST['cost'])){
			
			$cost = $_POST['cost'];
			
			$file = fopen('cost.txt', 'w');
        	$data = $cost;
        	fwrite($file, $data);
			fclose($file);

		}
	?>
	<form method="POST" action="CostEstimation.php" enctype="">

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
				<a href="ProjectManager.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset align="center">
				<legend align="center">Estimated Cost of Project</legend>
					<br><hr>
					<input type="text" name="cost" value="">
                    <br><br>
                    <input type="submit" name="" value="submit">

					<br><br>
				<?php
					if(isset($_POST['cost'])){

					echo "Estimated cost of Project: ".$_POST['cost'];
				}
				?>
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