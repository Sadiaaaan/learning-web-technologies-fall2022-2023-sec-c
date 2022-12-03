<!DOCTYPE html>

<head>
    <title>Scheduled Meetings List</title>
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
				<a href="ScheduleMeetings.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
        	<fieldset>
				<legend align="center">Scheduled Meetings</legend>
				<table height=90% width=30% align = "center">
                    <tr>
                        <td >Day of Project</td>
                        <td>Time</td>
                    </tr>
                    <?php
                        $file = fopen('meetingtime.txt', 'r');
                        $str = fread($file, filesize('meetingtime.txt'));
                        $user = explode(" ",$str);
                        $sz = count($user);
                        for($i = 0; $i < $sz; $i++){
                            if($i%2 == 0){
                                echo "<tr><td>".$user[$i]."</td>";
                            }
                            if($i%2 == 1){
                                echo "<td>".$user[$i]."</td></tr>";
                            }
                        }
                    ?>
                </table>
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