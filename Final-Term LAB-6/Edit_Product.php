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
    <title>Edit Product</title>
</head>
<body>

    <form method="POST" action="edit.php">
        <fieldset>
            <legend>EDIT PRODUCT</legend>
            <table>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="pname" value="" placeholder="<?php echo $name?>"></td>
                </tr>
                <tr>
                    <td>Buying Price</td>
                </tr>
                <tr>
                    <td><input type="number" name="bprice" value="" placeholder="<?php echo $bprice?>"></td>
                </tr>
                <tr>
                    <td>Selling Price</td>
                </tr>
                <tr>
                    <td><input type="number" name="sprice" value="" placeholder="<?php echo $sprice?>"></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="" name="display" value="" >Display</td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
            </table>
        </fieldset>

    </form>
    
</body>
</html>