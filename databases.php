<?php
if (!empty($_POST)){
    $dbhost="localhost";
    $dbuser="form_user";
    $dbpass="secretpassword";
    $dbname="reg_form";
    $connection= mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
    if(mysqli_connect_errno()) {
        die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
    }
    $sql = "INSERT INTO information ( name , city , gender , age , postal ) VALUES (
        '{$connection->real_escape_string($_POST['name'])}',
        '{$connection->real_escape_string($_POST['city'])}',
        '{$connection->real_escape_string($_POST['gender'])}',
        '{$connection->real_escape_string($_POST['age'])}',
        '{$connection->real_escape_string($_POST['postal'])}')";
            $insert = $connection->query($sql);

    if ($insert == TRUE){
        echo "<h1>Success! Thank you for your time! <h1>";
    } else {
        die ("Error:{$connection->errno} : {$connection->errno}");
    }

    $connection->close();
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Databases</title>
</head>
<body>
    <h1 align="center"> Sign up for updates about our new project </h1>
    <form method="Post" action="">
        <fieldset>
            <Legend> Registration Form </Legend>
            Name: <input type="text" name="name"><br><br>
            City: <input type="text" name="city"><br><br>
            Gender:: <input type="text" name="gender"><br><br>
            Age: <input type="text" name="age"><br><br>
            Postal Code: <input type="text" name="postal"><br><br>
            <input type="submit" value="Submit"><br>
        </fieldset>
    </form>

</body>
</html>