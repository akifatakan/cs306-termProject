<?php
    define("URL","admin.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php include "config.php";?>
        
        <a href="index.php"><button class="button-7" role="button">Go to Home Page</button></a>
        
        <?php include "customers.php"; ?>  
        <form action="deleteCustomer.php" method="POST">
            <select name="cid">
            <?php 
            
            $sql_command = "SELECT cid FROM customers";
            $myresult = mysqli_query($db, $sql_command);
            
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $cid = $id_rows['cid'];
                echo "<option value=$cid>" . $cid . "</option>";
            }
            ?>
            </select>
            <button class="button-7" style="background: red">DELETE</button>
        </form>
    </body>
</html>