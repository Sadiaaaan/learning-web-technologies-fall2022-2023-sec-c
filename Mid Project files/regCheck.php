<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $roles = $_POST['Roles'];

    if($username == "" || $password == "" || $email == ""){
        //echo "null username/password/email";
        header('location: registration.php?err=null');

    }else {
        /* $user = ['username'=> $username, "password"=> $password, "email"=> $email];
        $_SESSION['user'] = $user; */
        $file = fopen('user.txt', 'a');
        $data = $username." ";
        fwrite($file, $data);
        $data = $password." ";
        fwrite($file, $data);
        $data = $email." ";
        fwrite($file, $data);
        $data = $roles." ";
        fwrite($file, $data);
        fclose($file);
        echo "Done";
        
        header('location: registration.php?succ=done');
    }
?>