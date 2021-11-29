
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="dassh.css">
</head>
<body>
    <header class="header">
        <h1>Restaurant Rating Form Results</h1>
</header>
<div class="info">
<?php 
    $food_avg=null;
    $menu_avg=null;
    $service_avg=null;
    $atmosphere_avg=null;
    $numOfUsers=null;

    $connString = "mysql:host=localhost;dbname=resturantrating";
    $user="root";
    $pass="";

    $pdo = new PDO($connString, $user, $pass);
    $query = "select * from usersinfo";
    $d = $pdo->query($query);


    $query2 = "select * from ratinginfo";
    $info = $pdo->query($query2);

?>

<ul class="list">
    <li>
        <table class="tables">
            <tr>
                <th>User ID </th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone </th>
        </tr>
        <?php foreach($d as $data)
        {
        ?>
        <tr>
        <td><?php echo $data['user_id']; ?> </td>
        <td><?php echo $data['first_name']; ?> </td>
        <td><?php echo $data['last_name']; ?> </td>
        <td><?php echo $data['email']; ?> </td>
        <td><?php echo $data['phone']; ?> </td>
        </tr>
        <?php
        }
        ?>
        </table>
    </li>
    <li>
        <table class="tables">
                <tr>
                    <th>Rate ID </th>
                    <th>User ID </th>
                    <th>Food Rating</th>
                    <th>Menu Rating</th>
                    <th>Service rate</th>
                    <th>Atmosphere Rate</th>
                    <th>Transaction Date</th>
                    <th>Remarks</th>
            </tr>
            <?php foreach($info as $data2)
            {

            ?>
            <tr>
            <td><?php echo $data2['rate_ID']; ?> </td>
            <td><?php echo $data2['user_ID']; $numOfUsers= $data2['user_ID'];?> </td>
            <td><?php echo $data2['food_rate']; $food_avg+=$data2['food_rate']; ?> </td>
            <td><?php echo $data2['menu_rate']; $menu_avg= $menu_avg + $data2['menu_rate']; ?> </td>
            <td><?php echo $data2['service_rate']; $service_avg=$service_avg + $data2['service_rate']; ?> </td>
            <td><?php echo $data2['atmosphere_rate']; $atmosphere_avg=$atmosphere_avg + $data2['atmosphere_rate']; ?> </td>
            <td><?php echo $data2['transcation_date']; ?> </td>
            <td><?php echo $data2['remarks']; ?> </td>
            </tr>
            <?php
            }
            ?>
            </table>

    </li>
</ul>
</div>
<div class="output">
    <table class="tables">
        <tr>
            <th>Form Users</th>
            <th>Food Avg</th>
            <th>Menu Avg</th>
            <th>Service Avg</th>
            <th>Atmosphere Avg</th>
        </tr>
            <td><?php echo $numOfUsers;?></td>
            <td><?php echo number_format(($food_avg/$numOfUsers), 2);?></td>
            <td><?php echo number_format(($menu_avg/ $numOfUsers), 2);?></td>
            <td><?php echo number_format(($service_avg/ $numOfUsers), 2);?></td>
            <td><?php echo number_format(( $atmosphere_avg/ $numOfUsers), 2);?></td>
        <tr>

        </tr>

    </table>
</div>
</body>
</html>
