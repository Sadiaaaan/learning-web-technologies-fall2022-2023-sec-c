<?php 
    if(isset($_GET['err'])){
        echo "Null Value";
    }
?>

<html>
<head>
    <title>Registration Page</title>
</head>
<body>
        <form method="post" action="regCheck.php">
            <fieldset>
                <legend align ="center">REGISTRATION</legend>
                <table align ="center">
                    <tr>
                        <br>
                        <td>ID :</td>
                        <td><input type="text" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm Password :</td>
                        <td><input type="password" name="cpassword" value=""></td>
                    </tr>
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>User Type <sub>[User/Admin] :</sub></td>
                        <td><select name="usertype" id="">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td>
                            <hr>
                            <input type="submit" name="submit" value="Register">
                            <a href="Login.php">Login</a>
                            
                        </td>
                    </tr>
                </table><br>
            </fieldset>
        </form>
</body>
</html>