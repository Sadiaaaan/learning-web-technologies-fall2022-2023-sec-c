<?php 
    if(isset($_GET['Days'])){
        echo "<h4>Request Sent<h4>";
    }
?>

<!DOCTYPE html>

<head>
    <title>Request For Leave</title>
</head>

<body bgcolor="LIGHTGRAY">
	<form method="post" action="DevLeave.php">

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
				<a href="ProjectDeveloper.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Requesting A Leave</legend>
					<ul align="center" type="square">
						<li><h4>
                        <label for="Days">Choose your Day count of vacation:</label>
                            <select name="Days" id="Roles">
                                <option value="1">1 Day</option>
                                <option value="2">2 Day</option>
                                <option value="3">3 Day</option>
                                <option value="4">4 Day</option>
                                <option value="5">5 Day</option>
                                <option value="5+">More than 5 day</option>
                            </select>
                        </h4></li><hr>
                        <input type="submit" name="submit" value="Submit">

                        <?php
                            if(isset($_POST['Days'])){
                                $file = fopen('leaveReq.txt', 'a');
                                $data = $_POST['Days']." Devloper ";
                                fwrite($file, $data);
                                fclose($file);
                                echo "<h4>Request Sent<h4>";
                            }
                        ?>
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