

<!DOCTYPE html>
<head>
    <title>Add Product</title>
</head>
<body>

    <form method="POST" action="insert.php">
        <fieldset>
            <legend>ADD PRODUCT</legend>
            <table>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="pname" value=""></td>
                </tr>
                <tr>
                    <td>Buying Price</td>
                </tr>
                <tr>
                    <td><input type="number" name="bprice" value=""></td>
                </tr>
                <tr>
                    <td>Selling Price</td>
                </tr>
                <tr>
                    <td><input type="number" name="sprice" value=""></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="" name="display" value="">Display</td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>

    </form>
    
</body>
</html>