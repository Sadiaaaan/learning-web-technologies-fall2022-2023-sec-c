<!DOCTYPE html>

<head>
    <title>Check Meeting Request</title>
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
            <a href="ProjectManager.php">Home</a>&ensp;&ensp;
            <a href="Home.php" >Logout</a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  
        </div>        
    </nav>

        <hr><hr><br>

    <main>
        <form method="POST" action="" enctype="">
            <fieldset>
                <legend align="center">New Meeting Requests</legend>
                    <br><br>
                <table align="center" >
                    <tr>
                        <td>&ensp;&ensp;Project-1&ensp;&ensp;</td>
                        <td>&ensp;&ensp;
                            <?php
                                $file = 'meetingReq.txt';
                                if(file_exists($file)){
                                    $handle = fopen($file, 'r');
                                    $Time = fread($handle, filesize($file));
                                    
                                    echo $Time;
                                    fclose($handle);
                                } else{
                                    echo 'No New Meeting Request!';
                                }     
                            ?>&ensp;&ensp;
                        </td>
                    </tr>
                    <tr>
                        <td>&ensp;&ensp;Project-2&ensp;&ensp;</td>
                        <td>&ensp;&ensp;No New Meeting Request!&ensp;&ensp;</td>
                    </tr>
                    <tr>
                        <td>&ensp;&ensp;Project-3&ensp;&ensp;</td>
                        <td>&ensp;&ensp;No New Meeting Request!&ensp;&ensp;</td>
                    </tr>
                    <tr>
                        <td>&ensp;&ensp;Project-4&ensp;&ensp;</td>
                        <td>&ensp;&ensp;No New Meeting Request!&ensp;&ensp;</td>
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