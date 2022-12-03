<?php 
    if(isset($_POST['submit1'])){

        $file = 'workupdateproject01.txt';
        $handle = fopen($file, 'a');
        $contents = " " ."Manager"." "."Processing"; 
        fwrite($handle, $contents);
        fclose($handle);

    } elseif(isset($_POST['submit2'])){
        $file = 'workupdateproject01.txt';
        $handle = fopen($file, 'a');
        $contents = " " ."Done,"; 
        fwrite($handle, $contents);
        fclose($handle);
        
    } else{
        echo " ";
    }
?>

<!DOCTYPE html>
<head>
    <title>Work Update for Manager</title>
</head>

<body bgcolor="LIGHTGRAY">
    <form method="POST" action="">

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
                <a href="Homepage.php" target="_blank">Logout</a> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  
            </div>        
        </nav>

            <hr><hr><br>

        <main>
            <table align= "center">
                <tr>
                    <td>
                        <br><br>
                        <fieldset>
                        <legend align= "center"><b>Project Development Model</b></legend>
                        <?php 
                            $file= "projectModel.txt";
                            if(file_exists($file)){
                                $handle = fopen($file, 'r');
                                $contents = fread($handle, filesize($file));  
                                
                                echo $contents;
                                fclose($handle);
                            } else{
                                echo "Project Development Model is not selected yet!";
                            }
                           
                        ?>
                        <br><br><br>                    
                        </fieldset>
                    </td>
                    <td align= "center">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>
                    <td>
                        <br><br>
                        <fieldset>
                        <legend align= "center"><b>Any New change in Requirements</b></legend>
                        <!-- will read the file for description--> <br><br><br>
                        </fieldset>
                    </td>
                </tr>
                    
                <tr>
                    <td colspan="3" align="center">
                        <hr><br><br>
                        <input type="submit" name="submit1" value="Processing">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <hr><br><br>
                        <input type="submit" name="submit2" value="Completed">
                    </td>
                </tr>
            </table>
            

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