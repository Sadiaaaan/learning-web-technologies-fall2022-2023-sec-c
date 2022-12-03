<!DOCTYPE html>

<head>
    <title>Requirement List</title>
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
				<a href="Homepage.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			</div> 
		</nav>

			<hr><hr><br>

		<main>
        	<fieldset align="center">
				<legend align="center">Updated Requirements</legend>
				<table height=90% width=30% align = "center">
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><b><u>Requirements</u></b></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>
                    <?php
                        $file = fopen('UpdatedReq.txt', 'r');
                        $str = fread($file, filesize('UpdatedReq.txt'));
                        $user = explode("\n",$str);
                        $sz = count($user);
                        for($i = 0; $i < $sz; $i++){
                                echo "<tr><td>".$user[$i]."</td></tr>";
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