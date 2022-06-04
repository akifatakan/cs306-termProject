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
        <?php include "workers.php"; ?>
        <form action="deleteWorker.php" method="POST">
            <select name="wid">
                <?php

                $sql_command = "SELECT wid FROM workers";
                $myresult = mysqli_query($db, $sql_command);

                while($id_rows = mysqli_fetch_assoc($myresult)){
                    $wid = $id_rows['wid'];
                    echo "<option value=$wid>" . $wid . "</option>";
                }
                ?>
            </select>
            <button class="button-7" style="background: red">DELETE</button>
        </form>
        <?php include "busses.php"; ?>
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
            <button class="button-7" style="background: red">DELETE</button>
        </form>
        <?php include "trips.php"; ?>
        <form action="deleteTrip.php" method="POST">
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
            <button class="button-7" style="background: red">DELETE</button>
        </form>
    </body>
</html>