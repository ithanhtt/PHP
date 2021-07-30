<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Indexing</title>
</head>

<body>
    <?php
    function array_indexing($num) {
        $arr = array(1, 2, 3, 4, 5, 6);
        $num1 = $num / 2;

        if ($num1 <= count($arr)) {
            return $arr[$num1];
        } else {
            return "No element";
        }
    }

    $number = isset($_GET['number'])  ? $_GET['number'] : 0;

    if (!is_numeric($number) || $number <= 0) {
        $return = "Please enter the correct fomat!";
    } else {
        $return = array_indexing($number);
    }

    ?>
    <form action="#" method="get">
        <p>array(1, 2, 3, 4, 5, 6)</p>
        <table>
            <tr>
                <td><label for="number">Value</label></td>
                <td><input type="text" name="number" id="number"></td>
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