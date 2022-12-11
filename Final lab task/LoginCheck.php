<?php
    session_start();

    require_once('signupmodel.php');

    $id = $_POST['id'];
    $password = $_POST['password'];
    //$rememberme = $_POST['rememberme'];

    echo $id; $password;

    if($id == "" || $password == ""){
        
        header('location: Login.php?err=null&&msg=abc');

    }else{
        
        logincheck($id,$password);
          
    }
    
   
?>