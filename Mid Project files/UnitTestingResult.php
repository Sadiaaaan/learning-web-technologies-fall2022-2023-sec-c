<!DOCTYPE html>

<head>
    <title>Project Developer Homepage</title>
</head>

<body bgcolor="LIGHTGRAY">
<?php 
		session_start();
		if(isset($_POST['UpdateReq'])){
            $file = fopen('unitTest.txt', 'a');
            $data = " ".$_POST['UpdateReq'];
            fwrite($file, $data);
			fclose($file);
		}
	?>
	<form method="post" action="UnitTestingResult.php" enctype="">
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
				<a href="ProjectDeveloper.php">Home</a> &ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Unit Testing Result</legend>
                <table align= "center" width = "90%">
                    <tr>
                        <td><b>Project Reqirements</b></td>
                        <td><b>State(Click to mark as done)</b></td>
                    </tr>
                        <?php
                

                            $file = fopen('updatedReq.txt', 'r');
                            $str = fread($file, filesize('updatedReq.txt'));
                            $reqmnt = explode("\n",$str);
                            fclose($file);

                            $file = fopen('unitTest.txt', 'r');
                            $str = fread($file, filesize('unitTest.txt'));
                            $unit = explode(" ",$str);
                            fclose($file);
                            $flag = 0;
                            for($i = 0; $i < count($reqmnt);$i++){
                                $flag = 0;
                                if($reqmnt[$i] == "") continue;
                                for($j = 0; $j < count($unit);$j++){
                                    if($i == (int)$unit[$j]){
                                        $flag = 1;
                                    }
                                }
                                if($flag == 0){
                                    echo "<tr><td>".$reqmnt[$i]."</td>";
                                    echo '<td><input type="submit" name="UpdateReq" value="'.$i.'"></td></tr>';
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