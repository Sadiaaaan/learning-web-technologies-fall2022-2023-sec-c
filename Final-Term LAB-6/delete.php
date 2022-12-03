<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        session_start();
        $name = $_SESSION['status'];

        if(isset($_POST['submit'])){

            $con = mysqli_connect('localhost', 'root', '', 'product_db');
    
            if(!$con){
                echo 'Connection failed: '. mysqli_connect_error();
            } else{
                //echo 'Successfully connected!';
            }
            $sql = "DELETE FROM product WHERE Name= '$name'";
                
            if($query = mysqli_query($con, $sql)){
                    
                $_SESSION['status']=  "Data Updated!";
                header('Location: showtable.php');
                
            }else{
                $_SESSION['status']= "DB conection error!";
            }  
        }
        
    }

?>
