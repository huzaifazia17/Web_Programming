<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
<?php
$first= $_POST["first"];
$last= $_POST["last"];
$gender= $_POST["gender"];
$email= $_POST["email"];
?>

Welcome <?php echo $first." ";
echo $last ;?><br>
You are a : <?php echo $gender ; ?><br>
Your email address is: <?php echo $email; ?>

</body>
</html>