<?php 

    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<html>
<head>
    <title>Login Page</title>
</head>
<body>
        <form method="post" action="LoginCheck.php">
            <fieldset>
                <legend align="center">LOGIN</legend>
                <table align="center">
                    <br>
                    <tr>
                        <td>User ID</td>
                        <td><input type="text" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="checkbox" name="rememberme" value="">Remember Me
                        </td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <hr>
                            <input type="submit" name="submit" value="Login">
                            <a href="Signup.php">Register</a>
                        </td>
                    </tr>
                    
                </table>
                <br>
            </fieldset>
        </form>
</body>
</html>