<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Varialbe Assignment</title>
</head>

<body>
    <?php
    function basic_varialbe_assignment($n, $r) {
        return $n . $r;
    }

    $name = isset($_GET['name']) ? $_GET['name'] : ".";
    $result = isset($_GET['result']) ? $_GET['result'] : "..";
    $return = basic_varialbe_assignment($name, $result);

    ?>
    <form action="#" method="get">
        <table>
            <tr>
                <td><label for="name">name</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="result">result</label></td>
                <td><input type="text" name="result" id="result"></td>
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