<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function numbers_equal($num1, $num2) {
        if ($num1 == $num2) {
            return "True";
        } else {
            return "False";
        }
    }

    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    if (is_numeric($_GET['number1']) && is_numeric($_GET['number2'])) {
        $return = numbers_equal($number1, $number2);
    } else {
        $return = "Please enter a number";
    }

    ?>
    <form action="#" method="get">
        <table>
            <tr>
                <td><label for="number1">Number 1</label></td>
                <td><input type="text" name="number1" id="number1"></td>
            </tr>
            <tr>
                <td><label for="number2">Number 2</label></td>
                <td><input type="text" name="number2" id="number2"></td>
            </tr>
            <tr>
                <td>Return</td>
                <td><input type="text" name="return" value="<?php echo $return; ?>" disabled></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Run now!"></td>
            </tr>
        </table>
    </form>
</body>

</html>