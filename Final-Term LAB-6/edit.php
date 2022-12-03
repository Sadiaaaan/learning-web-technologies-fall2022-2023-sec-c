<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        session_start();

        if(isset($_POST['submit'])){

            $name= $_POST['pname'];
            $buying_price= $_POST['bprice'];
            $selling_price= $_POST['sprice'];

            if($name == "" || $buying_price == "" ||$selling_price == ""){
                $_SESSION['status']= 'No Data!';
                header("Location: Edit_Product.php");
               
            } else{
    
                $con = mysqli_connect('localhost', 'root', '', 'product_db');
    
                if(!$con){
                    echo 'Connection failed: '. mysqli_connect_error();
                } else{
                    //echo 'Successfully connected!';
                }
                $sql = "UPDATE product SET Name= '$name', Buying_Price= '$buying_price', Selling_Price= '$selling_price' WHERE Name= '$name'";
                
                if($query = mysqli_query($con, $sql)){
                    
                    $_SESSION['status']=  "Data Updated!";
                    if(isset($_POST['display'])){
                        header('Location: showtable.php');
                    }else{
                        header('Location: Edit_Product.php');
                    }
        
                    
                }else{
                    $_SESSION['status']= "DB conection error!";
                }
    
            }
            
        }
        
    }

?>
