<?php 
    session_start();
    
    $name = $_SESSION['status']; $bprice; $sprice;
    

    $con = mysqli_connect('localhost', 'root', '', 'product_db');
    if(!$con){
        echo 'Connection failed: '. mysqli_connect_error();
    } else{
                //echo 'Successfully connected!';
    }
    $sql = "SELECT * FROM product WHERE Name= '$name'";

     $query = mysqli_query($con, $sql);

    $row_count= mysqli_num_rows($query);
    if($row_count > 0){
        while($row = mysqli_fetch_assoc($query)){
            
            $name= $row['Name']; 
            $bprice= $row['Buying_Price']; 
            $sprice= $row['Selling_Price'];
                    
        }
    }else{
        echo "No data found!";
    }
?>
<!DOCTYPE html>
<head>
    <title>Delete Product</title>
</head>
<body>

    <form method="POST" action="delete.php">
        <fieldset>
            <legend>DELETE PRODUCT</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td>:   <?php echo $name?></td>
                </tr>
                
                <tr>
                    <td>Buying Price</td>
                    <td>:   <?php echo $bprice?></td>
                </tr>
                <tr>
                    <td>Selling Price</td>
                    <td>:   <?php echo $sprice?></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Delete"></td>
                </tr>
            </table>
        </fieldset>

    </form>
    
</body>
</html>