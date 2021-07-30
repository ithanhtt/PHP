<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean</title>
</head>

<body>
    <?php
    function boolean_ex($b) {
        if ($b == true) {
            return "true";
        } else {
            return "false";
        }
    }

    $boolean = isset($_GET['boolean']) ? (bool)$_GET['boolean'] : 1;
    $return = boolean_ex($boolean);
    // echo $return;

    ?>
    <form action="#muahahahahahaha" method="get">
        <table>
            <tr>
                <td><label for="boolean">Boolean</label></td>
                <td>
                    <select name="boolean" id="boolean">
                        <option value="1">True</option>
                        <option value="0">False</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="return">Return</label></td>
                <td><input type="text" name="return" id="return" value="<?php echo $return; ?>" disabled></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Run now!"></td>
            </tr>
        </table>
    </form>
</body>

</html>