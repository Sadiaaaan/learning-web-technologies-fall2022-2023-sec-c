<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $file = fopen('user.txt', 'r');
	$str = fread($file, filesize('user.txt'));
	$user = explode(" ",$str);
    #print_r($user);
    $sz = count($user);
    $userflag = 0;
    $i = 0;
    for($i = 0; $i < $sz; $i+=4){
        if($username === $user[$i]){
            echo "valid username ";
            $userflag = 1;
        }
    }
    if( $userflag === 0){
        echo "Invalid username";
        header('location: Login.php?err=username');
    }
    else{
        $userflag = 0;
        for($i = 1; $i < $sz; $i+=4){
            if($password === $user[$i]){
                echo " valid password ";
                $userflag = $i;
            }
        }
        if( $userflag === 0){
            echo "Invalid username";
            header('location: Login.php?err=password');
        }
        else{
            $role = $user[$userflag+2];
            if($role === 'Analyzer'){
                header('location: ProjectAnalyzer.php');
            }
            if($role === 'Manager'){
                header('location: ProjectManager.php');
            }
            if($role === 'Developer'){
                header('location: ProjectDeveloper.php');
            }
            if($role === 'Tester'){
                header('location: ProjectTester.php');
            }
            if($role === 'Technical_Writer'){
                header('location: ProjectTechnicalWriter.php');
            }
            if($role === 'Client'){
                header('location: Client.php');
            }
            if($role === 'Admin'){
                header('location: Admin.php');
            }
        }
    }

	fclose($file);
?>