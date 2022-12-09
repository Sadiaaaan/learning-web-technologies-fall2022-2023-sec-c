<!DOCTYPE html>
<head>
    <title>Provided Project Requirement</title>
</head>
<body>
    <form method="" action="" enctype="">
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
                <legend align="center">All The Given Requirements</legend>
                <table height=90% width=30% align = "center"><br>
                <tr>
                    <th><h3>Requirement ID</h3></th>
                    <th><h3>Requirement</h3></th>
                </tr>
                <?php

                    require_once('../models/taskinfomodel.php');
                    $tasks = allreq();
                    foreach($tasks as $task){
                        echo "	<tr><td>{$task['taskid']}</td>
								<td>{$task['task']}</td></tr>";
                    }
                ?>
                    
                
                </table><br>
            </fieldset>
        </main>
        <footer>

        </footer>
    </form>
    
</body>
</html>