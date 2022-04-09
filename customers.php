<!DOCTYPE html>
<html>
    <head>
        <title>Customers</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body align="center">
        <h1>CUSTOMERS</h1><br><br>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>AGE</th>
                <th>SSN</th>
                <th>GENDER</th>
                <th>PHONE NUMBER</th>
                <th>E-MAIL</th>

            </tr>

            <?php 
                include "config.php";
                $sql_statement = "SELECT * FROM customers";
                $result = mysqli_query($db, $sql_statement);

                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['cid'];
                    $name = $row['cname'];
                    $surname = $row['csurname'];
                    $age = $row['age'];
                    $ssn = $row['ssn'];
                    $gender = $row['gender'];
                    $telephone = $row['telephone'];
                    $mail = $row['mail'];

                    echo "<tr>" . "<td>" . $id . "</td>" . "<td>" . $name . "</td>" . "<td>" . $surname . "</td>" . "<td>" . $age . "</td>" . "<td>" . $ssn . "</td>" . "<td>" . $gender . "</td>" . "<td>" . $telephone . "</td>" . "<td>" . $mail . "</td>" ."</tr>";
                }
            ?>
        </table>
        <a href="index.php"><button class="button-7" role="button">Go to Home Page</button></a>
    </body>
</html>