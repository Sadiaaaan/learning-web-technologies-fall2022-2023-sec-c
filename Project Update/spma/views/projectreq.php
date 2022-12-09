<?php 
    if(isset($_GET['err'])){
        echo "Please enter your requirement first";
        unset($_GET);
    }
?>

<!DOCTYPE html>
<head>
    <title>Project Requirement</title>
</head>
<body>
    <form method="post" action='../controllers/reqcheck.php' enctype="">
            <hr><hr>
            <header>
                <div align= "center">
                <h1><img src= "#" alt= "" width= "">Software Project Management Application</h1>
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
                    <a href="../views/client.php">Home</a>&ensp;&ensp;			
                    <a href="../index.php">Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                </div> 
            </nav>
    
            <hr><hr><br>
       
        <main>
            <fieldset align="center">
                <legend align="center">Please Provide Project Requirements</legend>
                <table height=90% width=30% align = "center"><br>
                <tr>
                    <td >
                        <input type="text" name="req" value="">
                    </td>
                </tr>
                <tr>
                    <td >
                    <hr><input type="submit" name="" value="Submit">
                    </td>
                </tr>
                </table><br>
            </fieldset>
            <br><br>
            
        </main>
        <footer>

        </footer>
    </form>
    
</body>
</html>