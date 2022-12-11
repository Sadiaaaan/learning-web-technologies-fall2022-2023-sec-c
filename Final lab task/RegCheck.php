<?php
    session_start();
    require_once('signupmodel.php');

    $id = $_POST['id'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];

    if($id == "" || $password == "" || $cpassword == "" || $name == "" || $email == "" || $usertype == ""){
        
        header('location: Signup.php?err=null');

    }else {

        if($password === $cpassword){

            $user = ['id'=> $id, 'password'=> $password, 'name'=> $name, 'email'=> $email, 'usertype'=> $usertype];
            
            $status = insertuser($user);
            if( $status){

                $_SESSION['id'] = $id; $_SESSION['password'] = $password; 
                header('location: Login.php');
            }else{
                header('location: Signup.php?err=dberror');
            }
            
        }else{
            header('location: Signup.php?err=checkcpassword');
        }
    }
?>