<?php 
    require_once('db.php');

    function inserttitle($title){

        $con = getConnection();
        $sql = "insert into projectinfo (projectid, projectname) values('', '{$title}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function insertdevno($devno){

        $con = getConnection();
        $sql = "insert into projectinfo (reqnoofdev) values('{$devno}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function insertprototype($target_dir){

        $con = getConnection();
        $sql = "insert into projectinfo (projectprototype) values('{$target_dir}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function analyzerprog($anaprog){

        $con = getConnection();
        $sql = "insert into projectinfo (anaprog) values('{$anaprog}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;

    }

    function twritterprg($twprog){

        $con = getConnection();
        $sql = "insert into projectinfo (twprog) values('{$twprog}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;

    }





?>
