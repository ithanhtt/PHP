<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Circle and Two Squares</title>
</head>

<body>
    <?php

    function square_areas_difference($r) {
        $bigSquareArea = 4 * $r * $r;
        $smallSquareArea = 2 * $r * $r;

        return $bigSquareArea - $smallSquareArea;
    }

    $radius = isset($_GET['radius']) ? $_GET['radius'] : 0;

    if ($radius != (int)$radius && $radius >= 0) {
        $return = "Please enter an integer";
    } else {
        $return = square_areas_difference($radius);
    }

    ?>
    <form action="#" method="get">
        <table>
            <tr>
                <td><label for="radius">Radius</label></td>
                <td><input type="text" name="radius" id="radius"></td>
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