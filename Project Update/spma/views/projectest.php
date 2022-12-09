<!DOCTYPE html>

<head>
    <title>Project Estimation</title>
</head>

<body bgcolor="LIGHTGRAY">
    <form method="post" action="../controllers/projectestcalculate.php" enctype="">

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
				<a href="../views/analyzer.php">Home</a>&ensp;&ensp;
				<a href="index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<table align="center">
				<tr>
					<td>
						<fieldset align="center">
							<legend align="center">COCOMO (Constructive Cost Model)</legend>
								<table border="1">
								<br>
									<tr>
										<th>Software Project Type</th>
										<th>Coefficient<sub>(Effort Factor)</sub></th>
										<th>P <sub>(Project Complexity)</sub></th>
										<th>T <sub>(SLOC-Dependent Coefficient )</sub></th>
									</tr>
									<tr>
										<td>Organic</td>
										<td>2.4</td>
										<td>1.05</td>
										<td>0.38</td>
									</tr>
									<tr>
										<td>Semi-detached</td>
										<td>3.0</td>
										<td>1.12</td>
										<td>0.35</td>
									</tr>
									<tr>
										<td>Embedded</td>
										<td>3.6</td>
										<td>1.20</td>
										<td>0.32</td>
									</tr>
								</table>
								<br><br>
						</fieldset><br><br>
					</td>
					<td>
						<fieldset align="center">
							<legend align="center">Please Give Information To Proceed</legend>
							<br><br>
							<table border="1">
								<tr>
									<td>Project Type</td>
									<td>
										<select name="projecttype" id="">
											<option value="Organic">Organic</option>
											<option value="Semi-detached">Semi-detached</option>
											<option value="Embedded">Embedded</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>SLOC<sub>(Lines Of Code)</sub></td>
									<td>
										<select name="sloc" id="">
											<option value="10000">10000</option>
											<option value="50000">50000</option>
											<option value="100000">100000</option>
											<option value="150000">150000</option>
											<option value="1000000">1000000</option>
											<option value="2000000">2000000</option>
											<option value="3500000">3500000</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="2"><input type="submit" name="" value="Submit"></td>
								</tr>
							</table>
							<br><br>
						</fieldset><br><br>	
					</td>
				</tr>
			</table>

			<fieldset align="center">
				<legend align="center">The Calculated Estimation-</legend>

				<table border="1" align="center">
					<br>
					<tr>
						<th>Effort Estimation <sub>(labor working hours)</sub></th>
						<th>Development Time <sub>(week days)</sub></th>
						<th>Required number of people</th>
					</tr>

					<?php 
						session_start();
						
						if(isset($_SESSION['pm']) || isset($_SESSION['dm']) ||isset($_SESSION['people'])){
							echo "<tr><td>{$_SESSION['pm']}</td><td>{$_SESSION['dm']}</td><td>{$_SESSION['people']}</td></tr>";
							session_unset();
						}else{
							echo "<tr><td>Empty</td><td>Empty</td><td>Empty</td></tr>";
						}
						
						
				?>
				</table>
				<br>
			</fieldset><br><br>
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