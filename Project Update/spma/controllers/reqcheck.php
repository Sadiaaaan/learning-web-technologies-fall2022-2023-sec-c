<?php
    session_start();
    require_once('../models/taskinfomodel.php');

    $req = $_POST['req'];

    if($req == ""){

        header('location: ../views/projectreq.php?err=null');

    }else{
 
        $status = insertreq($req);
      
        if($status){
            header('location: ../views/projectreq.php');
        }else{
            echo "DB insertion error!";
        }
    }

?>