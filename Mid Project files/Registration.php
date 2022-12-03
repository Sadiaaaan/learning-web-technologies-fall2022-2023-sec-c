<?php 
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>

<head>
    <title>Registration Page</title>
</head>

<body bgcolor="LIGHTGRAY">

        <hr><hr>

    <header>
        <div align= "center">
        <h1><img src= "#" alt= "" width= "">Software Project Development Application</h1>
        </div>
    </header>

        <hr><hr><br>

    <nav>
        <div align= "right">
            <a href="Admin.php">Home</a>
            &ensp;&ensp;
            <a href="Homepage.php">Logout</a>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
        </div>        
    </nav>

        <hr><hr><br>

    <main>
        <form method="post" action="regCheck.php" >
            <fieldset>
                <legend align="center"><b><h2>Registration</h2></b></legend>
                <table align="center">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            <label for="Roles">Choose your Role:</label>
                            <select name="Roles" id="Roles">
                                <option value="Analyzer">Project Analyzer</option>
                                <option value="Manager">Project Manager</option>
                                <option value="Developer">Project Developer</option>
                                <option value="Tester">Project Tester</option>
                                <option value="Technical_Writer">Project Documentor</option>
                                <option value="Client">Client</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php 
                                if(isset($_GET['succ'])){
                                    echo "<b><h4>Employee Added</h4></b>";
                                }
                            ?>
                        </td>
                    </tr>
                </table>
                    <br><br>
            </fieldset>
        </form>
    </main>

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