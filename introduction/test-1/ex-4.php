<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
</head>

<body>
    <?php
    function area_of_rectangel($l, $h) {
        return $l * $h;
    }

    $length = isset($_GET['length']) ? $_GET['length'] : 0;
    $width = isset($_GET['width']) ? $_GET['width'] : 0;

    if (!is_numeric($length) || !is_numeric($width) || $length <= 0 || $width <= 0) {
        $return = -1;
    } else {
        $return = area_of_rectangel($length, $width);
    }

    ?>
    <form action="#" method="get">
        <table>
            <tr>
                <td><label for="length">Length</label></td>
                <td><input type="text" name="length" id="length"></td>
            </tr>
            <tr>
                <td><label for="width">Width</label></td>
                <td><input type="text" name="width" id="width"></td>
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