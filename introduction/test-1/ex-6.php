<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Consecutive Numbers</title>
</head>

<body>
    <?php
    function array_consecutive_numbers($l, $h) {
        $arr = range($l, $h);
        echo "<b>getSequence(" . $l . ", " . $h . ") </b> ➞ [";

        foreach ($arr as $value) {
            if ($h > $value) {
                echo  $value . ", ";
            } else {
                echo  $value;
            }
        }

        echo "]";
    }

    $low = isset($_GET['low']) ? $_GET['low'] : 0;
    $high = isset($_GET['high']) ? $_GET['high'] : 0;
    $return = array_consecutive_numbers($low, $high);

    ?>
    <form action="#" method="get">
        <table>
            <tr>
                <td><label for="low">Low</label></td>
                <td><input type="text" name="low" id="low"></td>
            </tr>
            <tr>
                <td><label for="high">High</label></td>
                <td><input type="text" name="high" id="high"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Run now!"></td>
            </tr>
        </table>
    </form>
</body>

</html>