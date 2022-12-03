<!DOCTYPE html>

<head>
    <title>Project Model Selection</title>
</head>

<body bgcolor="LIGHTGRAY">
	<?php 
		session_start();
		if(isset($_POST['model'])){
			
			$model = $_POST['model'];
			
			$file = fopen('projectModel.txt', 'w');
        	$data = $model;
        	fwrite($file, $data);
			fclose($file);

		}
	?>
	<form method="POST" action="projectModel.php" enctype="">

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
				<legend align="center">Project Model Details</legend>
                    <label for="model"><br>Select a model: </label>
                    <select name="model" id="model">
                        <option value="Scrum">Scrum</option>
                        <option value="XP">XP</option>
                        <option value="Waterfall">Waterfall</option>
                        <option value="Incremental">Incremental</option>
                        <option value="DSDM">DSDM</option>
                        <option value="FDD">FDD</option>
                    </select>
					<br><br><hr>
					<input type="submit" name="submit" value="submit">
					<br><br>
				<?php
					if(isset($_POST['model'])){

					echo $_POST['model']." "."Selected.";
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