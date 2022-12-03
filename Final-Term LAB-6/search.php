<?php 
   

        session_start();
        
        if(isset($_POST['input'])){

            $input= $_POST['input'];
            $con = mysqli_connect('localhost', 'root', '', 'product_db');
    
            if(!$con){
                echo 'Connection failed: '. mysqli_connect_error();
            } else{
                //echo 'Successfully connected!';
            }
            $sql = "SELECT * FROM product WHERE Name LIKE '{$input}%'";
            $query = mysqli_query($con, $sql);   
            if(mysqli_num_rows($result) > 0){?>
                  
                <table align="center">
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Profit</td>
                        <td colspan="2"></td>
                    </tr>
                    
                    <?php 
                    while($row = mysqli_fetch_assoc($query)){
            
                        $name= $row['Name']; 
                        $bprice= $row['Buying_Price']; 
                        $sprice= $row['Selling_Price'];
                    }
                    }else{
                        echo "No data found!";
                    }
                    ?>
                    <tr>
                        <td><?php echo $name?></td>
                        <td><?php echo $bprice?></td>
                        <td><?php echo $sprice?></td>
                    </tr>

                </table>
                <?php 
                 }
                ?>

                
               