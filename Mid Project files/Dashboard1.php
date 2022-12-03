<!DOCTYPE html>

<head>
    <title>Dashboard Project-1</title>
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
            <a href="Homepage.php" >Logout</a> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  
        </div>        
    </nav>

        <hr><hr><br>

    <main>
        <section>
            <fieldset>
                <legend align= "center">Project Descripton</legend>
                <table align= "center"><br>
                    <tr>
                        <td rowspan="2">
                        <?php 
                            $file= "description.txt";
                            if(file_exists($file)){
                                $handle = fopen($file, 'r');
                                $contents = fread($handle, filesize($file));  
                        
                                echo $contents;
                                fclose($handle);
                            } else{
                                echo "Project Description is not added yet!";
                            } 
                ?>
                        </td>
                    </tr>
                </table>
                <br><br><br><br><br>
            </fieldset>
        </section>
        
            <br><hr><hr>

        <section>
            <h3 align= "center"><u>Project Progress Stages</u></h3><br>
            <table align= "center">
                <tr>
                    <td align= "center"><b>Project Analyzer</b></td>
                    <td align= "center">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>
                    <td align= "center"><b>Project Manager</b></td>
                    <td align= "center">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>
                    <td align= "center"><b>Project Developer</b></td>
                </tr>
                <tr>
                    <td>
                        <fieldset>
                            <ul align="center" type="square">
                                <li>&ensp;&ensp;&ensp;&ensp;<a href="CheckupdateAnalyzer.php">Check Updates </a>&ensp;&ensp;&ensp;&ensp;</li><hr>
                                
                            </ul>
                        </fieldset>
                    </td>
                    <td align= "center"></td>
                    <td>
                        <fieldset>
                            <ul align="center" type="square">
                                <li>&ensp;&ensp;&ensp;&ensp;<a href="CheckupdateManager.php">Check Updates </a>&ensp;&ensp;&ensp;&ensp;</li><hr>
                                
                            </ul>
                        </fieldset>
                    </td>
                    <td align= "center"></td>
                    <td>
                        <fieldset>
                            <ul align="center" type="square">
                                <li>&ensp;&ensp;&ensp;&ensp;<a href="CheckupdateDeveloper.php">Check Updates </a>&ensp;&ensp;&ensp;&ensp;</li><hr>
                                
                            </ul>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </section>
        <br><br>
        <section>
            <table align= "center">
                <tr>
                    <td align= "center"><b>Project Tester</b></td>
                    <td align= "center">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</td>
                    <td align= "center"><b>Project Technical Writer</b></td>
                </tr>
                <tr>
                    <td>
                        <fieldset>
                            <ul align="center" type="square">
                                <li>&ensp;&ensp;&ensp;&ensp;<a href="CheckupdateTester.php">Check Updates </a>&ensp;&ensp;&ensp;&ensp;</li><hr>
                                
                            </ul>
                        </fieldset>
                    </td>
                    <td align= "center"></td>
                    <td>
                        <fieldset>
                            <ul align="center" type="square">
                                <li>&ensp;&ensp;&ensp;&ensp;<a href="CheckupdateTwriter.php">Check Updates </a>&ensp;&ensp;&ensp;&ensp;</li><hr>
                                
                            </ul>
                        </fieldset>
                    </td>    
                </tr>    
            </table>
        </section>

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