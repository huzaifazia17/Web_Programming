<?php
if (!empty($_POST)){
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="resturantrating"; 


    $connection= mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {
        die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")");
    }


    $sql = "INSERT INTO usersinfo (first_name, last_name, email, phone) VALUES (
        '{$connection->real_escape_string($_POST['fname'])}',
        '{$connection->real_escape_string($_POST['lname'])}',
        '{$connection->real_escape_string($_POST['email'])}',
        '{$connection->real_escape_string($_POST['phone'])}')";
    $insert = $connection->query($sql);

    if ($insert == TRUE){
        echo "<h1>Successfully inserted Form!</h1>";
    } else {
        die ("Error:{$connection->errno} : {$connection->error}");
    }

    $last_id = mysqli_insert_id($connection);
    


    $sql1 = "INSERT INTO ratinginfo (user_ID,food_rate, menu_rate, service_rate, atmosphere_rate, transcation_date, remarks) VALUES (
        '{$connection->real_escape_string($last_id)}',
        '{$connection->real_escape_string($_POST['option'])}',
        '{$connection->real_escape_string($_POST['option1'])}',
        '{$connection->real_escape_string($_POST['option2'])}',
        '{$connection->real_escape_string($_POST['option3'])}',
        '{$connection->real_escape_string($_POST['date'])}',
        '{$connection->real_escape_string($_POST['remarks'])}')";
    $insert = $connection->query($sql1);

    if ($insert == TRUE){
        echo "<h1>Thank you for your time</h1>";
    } else {
        die ("Error:{$connection->errno} : {$connection->error}");
    }

    $connection->close();
}

?>