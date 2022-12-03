<!DOCTYPE html>

<head>
    <title>Cilent Homepage</title>
</head>

<body bgcolor="LIGHTGRAY">

	<?php 
		session_start();
        $description;
        $requirement;

		if(isset($_POST['description'])){

		$description = $_POST['description'];
	}

		if(isset($_POST['requirement'])){

        $requirement = $_POST['requirement'];
	}

		if(isset($_POST['description']) &&  isset($_POST['requirement'])){
			
		$file = fopen('description.txt', 'w');
		$data = $description."\n";
		fwrite($file, $data);
		fclose($file);

		$file = fopen('req.txt', 'a');
		$data = $requirement;
		fwrite($file, $data);
		fclose($file);
	}
	?>
	
	
	<form method="POST" action="Client.php" enctype="" name="meeting">
		
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
				<a href="Homepage.php" target="_blank">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
            <fieldset align="center">
                <legend align="center">Project Informations</legend>
                <table align="center">
				<tr>
                            <td>Project Description</td>
                            <td><input type="text" name="description" value="" ></td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td>Project Requirements</td>
                            <td><input type="text" name="requirement" value="" ></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="" value="Submit"></td>
                        </tr>
                </table>
				<br>
            </fieldset>

            	<br><br>

			<fieldset align="center">
				<legend align="center">Project Work Progress</legend>
                    <a href="Dashboard1.php" target="_blank"><h4>Dashboard</h4></a><hr>
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