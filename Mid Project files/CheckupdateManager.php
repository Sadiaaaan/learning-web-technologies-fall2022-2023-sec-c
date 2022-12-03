<!DOCTYPE html>

<head>
    <title>Manager Work Update Dashboard</title>
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
            <a href="Dashboard1.php">Dashboard</a>&ensp;&ensp;
            <a href="Homepage.php">Logout</a> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  
        </div>        
    </nav>

        <hr><hr><br>

    <main>

    <fieldset>
            <legend align= "center"><b>See the updates</b></legend>
            <table align= "center" border="1">
            <tr>
                <th><u>Unfinished</u></th>
                <th><u>On Process</u></th>
                <th><u>Finished</u></th>
            </tr>
            <tr>
                <td>
                    <?php
                        $file= "workupdateproject01.txt";
                        if(file_exists($file)){
                            $handle = fopen($file, 'r');
                            $contents = fread($handle, filesize($file));  
                            $update = explode(" ",$contents);
                            $sz = count($update); 
                            $i = 0;

                            if($sz == 3){
                                echo 'Yet not assigned! <br>';
                                echo 'Check Analyzer progress!'; 
                            }
                            fclose($handle);
                        } else{
                            echo ' ';
                        }    
                    ?>
                </td>
                <td>
                    <?php
                        $file= "workupdateproject01.txt";
                        if(file_exists($file)){
                        $handle = fopen($file, 'r');
                        $contents = fread($handle, filesize($file));  
                            $update = explode(" ",$contents);
                            $sz = count($update);
                            $i = 0;
                            if($sz == 5){
                                echo '<b>Processing</b> <br>';
                            }
                            fclose($handle);
                        } else{
                            echo ' ';
                        }
                    ?>
                </td>
                <td>
                    <?php
                        $file= "workupdateproject01.txt";
                        if(file_exists($file)){
                        $handle = fopen($file, 'r');
                        $contents = fread($handle, filesize($file));  
                        $update = explode(" ",$contents);
                        $sz = count($update);
                        $i = 0;
                        if($sz > 5){
                            echo '&#10004; <br>';
                        }
                        fclose($handle);
                    } else{
                        echo ' ';
                    }
                    ?>
                </td>
                <!-- right sign &#10004; -->
            </tr>
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

    
</body>
</html>