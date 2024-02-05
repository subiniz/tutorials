<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum</title>
</head>
<body>
    <?php
        /*
        * The isset() function is used to check whether a variable is set or not.
        * You can use $_POST to collect form data after submitting an HTML form with method="post".
        * In the example below, we are using the $_POST superglobal variable to collect the value of the input field.
        * You can use $_POST['num1'] and $_POST['num2'] to collect the values of the input fields.
        */
        if(isset($_POST['num1']) && isset($_POST['num2'])){ // Alternatively, you can use $_SERVER["REQUEST_METHOD"] == "POST"
            $num1 = $_POST['num1'];
            if (empty($num1)) {
                $errors['num1'] = "First number is required";
            }
            $num2 = $_POST['num2'];
            if (empty($num2)) {
                $errors['num2'] = "Second number is required";
            }
            $sum = $num1 + $num2;
        }
    ?>
    <!-- Using action="" will redirect the form to the same page after the form is submitted -->
    <!-- Or you can use " echo $_SERVER['PHP_SELF'];  -->
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter first number"><br>
        <?= isset($errors['num1']) ? $errors['num1'] : ""; ?>
        <input type="number" name="num2" placeholder="Enter second number"><br>
        <?= isset($errors['num2']) ? $errors['num2'] : ""; ?>
        <input type="submit" name="submit" value="Sum">
    </form>
    <?php
        if(isset($sum))
            echo "The sum of $num1 and $num2 is $sum";
    ?>
</body>
</html>