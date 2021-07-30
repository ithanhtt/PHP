<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary Addition + 0 1 0 1</title>
</head>

<body>
    <?php
    function binary_addition($st1, $st2) {
        $sum = $st1 + $st2;
        return decbin($sum);
    }

    $string1 = isset($_GET['string1']) ? $_GET['string1'] : 0;
    $string2 = isset($_GET['string2']) ? $_GET['string2'] : 0;

    if (!is_numeric($string1) || !is_numeric($string2)) {
        $return = "Please enter a number!";
    } else {
        $return = binary_addition($string1, $string2);
    }

    ?>
    <form action="#" method="get">
        <table>
            <tr>
                <td><label for="string1">string1</label></td>
                <td><input type="text" name="string1" id="string1"></td>
            </tr>
            <tr>
                <td><label for="string2">string2</label></td>
                <td><input type="text" name="string2" id="string2"></td>
            </tr>
            <tr>
                <td>Return</td>
                <td><input type="text" name="return" value="<?php print_r($return); ?>" disabled></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Run now!"></td>
            </tr>
        </table>
    </form>
</body>

</html>