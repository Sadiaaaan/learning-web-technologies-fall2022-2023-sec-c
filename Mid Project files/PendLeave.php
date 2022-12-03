<?php
    if(isset($_GET['succ'])){
        echo "User Added";
        unset($_GET);
    }
?>

<!DOCTYPE html>

<head>
    <title>Pending Leave Request</title>
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
				<a href="Admin.php">Home</a>&ensp;&ensp;
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
			<fieldset>
				<legend align="center">Pending Leave Reaquest</legend>
					<ul align="center" type="square">
                    <table height=90% width=60% align = "center">
                        <tr>
                            <td >Day</td>
                            <td>Employee Role</td>
                            <td></td>
                        </tr>
                        <?php
                            $file = fopen('leaveReq.txt', 'r');
                            $str = fread($file, filesize('user.txt'));
                            $user = explode(" ",$str);
                            fclose($file);
                            $sz = count($user);
                            for($i = 0; $i < $sz; $i++){
                                if($i%2 == 0){
                                    echo "<tr><td>".$user[$i]."</td>";
                                }
                                if($i%2 == 1){
                                    echo "<td>".$user[$i]."</td><td><input type=\"submit\" name=\"submit\" value=\"Approve\"></td></tr>";
                                }
                            }
                        ?>
                    </table>
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