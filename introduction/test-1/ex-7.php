<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Statistics: Mean</title>
</head>

<body>
    <?php
    function basic_statistics_mean($arr) {
        $arr = array_filter($arr);

        if (array_sum($arr) != 0) {
            $mean = array_sum($arr) / count($arr);
            return round($mean, 1);
        } else {
            return "Sum of numbers must be non-zero!";
        }
    }

    $array = isset($_GET['array']) ? $_GET['array'] : 1;

    if (!is_numeric($array)) {
        $array1 = explode(" ", $array);
        $return = basic_statistics_mean($array1);
    } else {
        $return = "Please enter numbers!";
    }

    ?>
    <form action="#" method="get">
        <p>Enter an array with each element separated by "space". Ex: 1 2 3 4 5</p>
        <table>
            <tr>
                <td><label for="array">array</label></td>
                <td><input type="text" name="array" id="array"></td>
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