<!DOCTYPE html>

<head>
    <title>Schedule Meetings</title>
</head>

<body bgcolor="LIGHTGRAY">
	<?php 

		session_start();
		$day;
		$start;
		$nd;

		if(isset($_POST['day']) &&  isset($_POST['start']) && isset($_POST['nd'])){

		$day = $_POST['day'];
		$start = $_POST['start'];
		$nd = $_POST['nd'];
		}

		if(isset($_POST['day']) &&  isset($_POST['start']) && isset($_POST['nd'])){
			
			$file = fopen('meetingtime.txt', 'a');
			$data = $day." ".$start."-".$nd." ";
			fwrite($file, $data);
			fclose($file);

		}
	?>
	<form method="POST" action="ScheduleMeetings.php" enctype="" name="meeting">

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
                <legend align="center">Show Schedule Meetings</legend>
                <a href="MeetingTime.php" ><h4>Meeting List</h4></a>
            </fieldset>

            	<br><br>

			<fieldset align="center">
				<legend align="center">Schedule new meeting</legend>
                    <table align="center">
							<br><br>
                        <tr>
                            <td>Day</td>
                            <td><input type="text" name="day" value="" ></td>
                        </tr>
                        <tr>
                            <td>Meeting Start</td>
                            <td><input type="text" name="start" value="" ></td>
                        </tr>
                        <tr>
                            <td>Meeting End</td>
                            <td><input type="text" name="nd" value="" ></td>
                        </tr>
                        <tr>
                            <td colspan="2"><br><hr><input type="submit" name="" value="Submit"></td>
                        </tr>
                    </table>
						<br><br>
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