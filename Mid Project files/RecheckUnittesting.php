<?php 
    if(isset($_POST['submit'])){

        session_start();
        $RequestedUtest= $_POST['unitno'];
        $file = 'recheckunittestgreq.txt';
        $handle = fopen($file, 'w+');
        $contents = $RequestedUtest; 
        fwrite($handle, $contents);
        fclose($handle);

    }else{
        echo " ";
    }
?>


<!DOCTYPE html>

<head>
    <title>Meeting Request</title>
</head>

<body bgcolor="LIGHTGRAY">

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
            <a href="ProjectTester.php">Home</a>&ensp;&ensp;
            <a href="Home.php" >Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  
        </div>        
    </nav>

        <hr><hr><br>

    <main>
        <form method="POST" action="" enctype="">
            <fieldset>
                <legend align="center">Make A Meeting Request</legend>
                <table align="center">
                    <tr>
                        <td><b><u>The Requested Unit Testing Number</u></b></td>
                        <td>
                            &ensp;&ensp;&ensp;<input type="number" name="unitno" value="" placeholder="Requirement Number"/> 
                        </td>
                    </tr>
                        <br><br>
                    <tr>
                        <td colspan="2" align="center"><br><hr>
                            <input type="submit" name="submit" value="Request">
                        </td>
                    </tr>
                </table>
                    <br><br>
            </fieldset>

        </form>

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
    
</body>
</html>