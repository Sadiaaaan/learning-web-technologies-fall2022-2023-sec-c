<!DOCTYPE html>
<head>
    <title>Display</title>
</head>
<body>
<br><br>
    <fieldset>
        <legend align="center">DISPLAY</legend>
        <table border="1" width="80%" align="center"><br>
            <tr>
                <td><b>ID</b></td>
                <td><b>NAME</b></td>
                <td><b>PROFIT</b></td>
                <td colspan="2"></td>
            </tr>
            <?php 

            session_start();
            $con = mysqli_connect('localhost', 'root', '', 'product_db');
            if(!$con){
                echo 'Connection failed: '. mysqli_connect_error();
            } else{
                //echo 'Successfully connected!';
            }
            $sql = "SELECT * FROM product";
            $query = mysqli_query($con, $sql);

            $row_count= mysqli_num_rows($query);
            if($row_count > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $_SESSION['status']=$row['Name'];
                    echo "<tr><td>".$row['ID']."</td><td>".$row['Name']."</td><td>".$row['Selling_Price']-$row['Buying_Price']."</td><td><a href="."Edit_Product.php?name=". $_SESSION['status'].">Edit</a></td>
                    <td><a href="."Delete_Product.php?name=". $_SESSION['status'].">Delete</a></td></tr>";
                }
            }else{
                echo "No data found!";
            }
        ?>
    
        </table>
    </fieldset>
</body>
</html>