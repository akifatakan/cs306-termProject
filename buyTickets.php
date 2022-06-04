<?php
    define("URL","buyTickets.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php include "config.php";?>
        
        
        <form action="deleteCustomer.php" method="POST">
            <select name="cid">
            <?php 
            
            $sql_command = "SELECT * FROM trips";
            $myresult = mysqli_query($db, $sql_command);
            
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $trid = $id_rows['trid'];
                $price = $id_rows['price'];
                $start_date = $id_rows['start_date'];
                $arrival_date = $id_rows['arrival_date'];
                $isService = $id_rows['isService'];
                $bid = $id_rows['bid'];
                $starts_lid = $id_rows['starts_lid'];
                $ends_lid = $id_rows['ends_lid'];
                echo "<option value=$trid>" . $trid . "</option>";
            }
            ?>
            </select>
            
        </form>
        
        <form action="deleteBusses.php" method="POST">
            <select name="bid">
                <?php

                $sql_command = "SELECT bid FROM busses";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $bid = $id_rows['bid'];
                    echo "<option value=$bid>" . $bid . "</option>";
                }
                ?>
            </select>
            
        </form>
    </body>
</html>