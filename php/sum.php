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
        * Instead of $_POST['submit'], you can also use $_POST['num1'] and $_POST['num2'] to collect the values of the input fields.
        */
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $sum = $num1 + $num2;
        }
    ?>
    <!-- Using action="" will redirect the form to the same page after the form is submitted -->
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter first number"><br>
        <input type="number" name="num2" placeholder="Enter second number"><br>
        <input type="submit" name="submit" value="Sum">
    </form>
    <?php
        echo "The sum of $num1 and $num2 is $sum";
    ?>
</body>
</html>