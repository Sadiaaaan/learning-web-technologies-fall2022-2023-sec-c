<?php 

    session_start();
    $projecttype = $_POST['projecttype'];
    $sloc = $_POST['sloc'];

    //echo 'hello'.$projecttype;
    //echo $sloc;
    //if($projecttype == null){
    //    echo 'hwllo';
    //     $_SESSION['pm'] = 'Empty'; $_SESSION['dm'] = 'Empty'; $_SESSION['people'] = 'Empty';
        //header('location: ../views/projectest.php');

    //}

    if($projecttype == 'Organic'){

        $coefficient = 2.4; $p = 1.05; $t = 0.38;
        
        $pm = $coefficient * pow(($sloc/1000) , $p);                           // effort   
        $dm = (2.50) * ( pow($pm, $t ));                                    // development time
        $people = $pm / $dm ; $peep = ceil($people);                      // req people to develop the project

        $_SESSION['pm'] = $pm; $_SESSION['dm'] = $dm; $_SESSION['people'] = $peep;

        header('location: ../views/projectest.php');

    }elseif($projecttype == 'Semi-detached'){

        $coefficient = 3.0; $p = 1.12; $t = 0.35;

        $pm = $coefficient * pow(($sloc/1000) , $p); 
        $dm = (2.50) *  ( pow($pm, $t ));
        $people = $pm / $dm ; $peep = ceil($people);

        $_SESSION['pm'] = $pm; $_SESSION['dm'] = $dm; $_SESSION['people'] = $peep;
        header('location: ../views/projectest.php');

    }elseif($projecttype == 'Embedded'){

        $coefficient = 3.6; $p = 1.20; $t = 0.32;

        $pm = $coefficient * pow(($sloc/1000) , $p);  
        $dm = (2.50) *  ( pow($pm, $t )); 
        $people = $pm / $dm ; $peep = ceil($people);

        $_SESSION['pm'] = $pm; $_SESSION['dm'] = $dm; $_SESSION['people'] = $peep;
        header('location: ../views/projectest.php');


    }else{
        echo "Try again";
    }


?>