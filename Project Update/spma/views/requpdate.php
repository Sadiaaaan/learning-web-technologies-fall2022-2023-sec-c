<!DOCTYPE html>

<head>
    <title>Update Requirement List</title>
</head>

<body bgcolor="LIGHTGRAY">
    
	<form method="post" action="../controllers/priorset.php" enctype="">

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
				<a href="../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
            <fieldset align="center">
                <legend align="center">Show Client Requirements</legend>
                <table height=90% width=30% align = "center">
                <tr>
                    <th><h3>Requirement ID</h3></th>
                    <th><h3>Requirement</h3></th>
					<th><h3>Set Priority</h3></th>
                </tr>
                <?php
					session_start();
                    require_once('../models/taskinfomodel.php');
					$_session['count'] = 1;
                    $tasks = allreq();
                    foreach($tasks as $task){
						
                        echo "<tr><td>{$task['taskid']}</td>"; 
						echo "<td>{$task['task']}</td>";
						
						if($task['prior'] == 0){
							
							$_SESSION['taskid'] = $task['taskid'];
							echo "<td><a href=\"../controllers/priorset.php?taskid={$task['taskid']}\">Save</td>";
							
						}else{
							echo "<td>Prioritized!</td>";
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