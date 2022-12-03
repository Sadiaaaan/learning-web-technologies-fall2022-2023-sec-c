<!DOCTYPE html>

<head>
    <title>Project Developer Homepage</title>
</head>

<body bgcolor="LIGHTGRAY">
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
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Unit Testing Result</legend>
                <table align= "center" width = "90%">
                    <tr>
                        <td><b>Project Reqirements<b></td>
                        <td><b>State<b></td>
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
                            for($i = 0; $i < count($unit);$i++){
                                if($unit[$i] == "" || isset($mark[$unit[$i]])) continue;
                                $mark[$unit[$i]] = 1;
                                for($j = 0; $j < count($reqmnt)-1;$j++){
                                    if($j == (int)$unit[$i]){
                                        echo "<tr><td>".$reqmnt[$j]."</td>";
                                        echo '<td>Done By Developer</tr>';    
                                    }
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