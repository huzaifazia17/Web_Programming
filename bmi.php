<!DOCTYPE html>
<html>
    <head>
        <title>BMI Calculator</title>
        <Link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <form method="Post" action="">
        <h1>BMI Calculator</h1>    
        <fieldset>
            <legend aligh="left">
                Check your BMI now!
            </legend>
                Weight in Pounds <input type="text" name="weight"><br><br>
                Height in inches <input type="text" name="height"><br><br>
                <input type="submit" value="Calculate">
                <?php
                if(!empty($_POST)){
                    $weight=$_POST['weight'];
                    $height=$_POST['height'];

                    $bmi=(($weight/$height)/$height)*703;

                    echo <<<END
                    The answer is: <input type="text" value="$bmi">
                    END;
                }
                ?>
                <script type="text/javascript">
                    const bmi = "<?php echo ($bmi); ?>"

                    if(bmi < 18.5){
                        document.write("You are underweight");
                    } else if (bmi >= 18.5 && bmi <=24.9){
                        document.write("Your weight is normal");
                    }else if (bmi >= 25 && bmi <= 29.9){
                        document.write("You are over weight");
                    }else{
                        document.write("Obesity");
                    }
                </script>
        </fieldset>
    </form>
</body>
</html>
