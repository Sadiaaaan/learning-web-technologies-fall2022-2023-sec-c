<!DOCTYPE html>

<head>
    <title>Update Requirement List</title>
</head>

<body bgcolor="LIGHTGRAY">
    <?php 
		session_start();
		if(isset($_POST['UpdateReq'])){
			
			$index = $_POST['UpdateReq'];
            $val = (int) $index;
            
            $file = fopen('req.txt', 'r');
            $str = fread($file, filesize('req.txt'));
            $user = explode(".",$str);
            $sz = count($user);
            for($i = 0; $i < $sz-1; $i++){
                if($i === $val)
                {
                    $file = fopen('UpdatedReq.txt', 'a');
                    $data = $user[$i]."\n";
                    fwrite($file, $data);
			        fclose($file);
                }
            }


		}
	?>
	<form method="POST" action="RequirementsUpdate.php" enctype="" name="meeting">

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
				<a href="ProjectAnalyzer.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
            <fieldset align="center">
                <legend align="center">Show Client Requirements</legend>
                <table height=90% width=30% align = "center">
                <tr>
                    <td ><b><u>Requirements</u></b></td>
                    <td></td>
                </tr>
                <?php
                        $file = fopen('req.txt', 'r');
                        $str = fread($file, filesize('req.txt'));
                        $user = explode(".",$str);
                        $sz = count($user);
                        for($i = 0; $i < $sz-1; $i++){
                            echo "<tr><td>".$user[$i]."</td>";  
                            echo '<td><input type="submit" name="UpdateReq" value="'.$i.'"></td></tr>';      
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