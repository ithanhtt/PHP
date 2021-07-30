<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>After N Months...</title>
</head>

<body>
    <?php
    function after_n_months($m, $y) {
        $convertMonthToYear = $m / 12;

        return round($convertMonthToYear) + $y;
    }

    $year = isset($_GET['year']) ? $_GET['year'] : 0;
    $month = isset($_GET['month']) ? $_GET['month'] : 0;

    if ($month != (int)$month || $month <= 0 || $year != (int)$year || $year <= 0) {
        $return = "Please enter the correct format";
    } else {
        $return = after_n_months($month, $year);
    }
    ?>
    <form action="#" method="get">
        <table>
            <tr>
                <td><label for="year">Year</label></td>
                <td><input type="text" name="year" id="year"></td>
            </tr>
            <tr>
                <td><label for="month">Month</label></td>
                <td><input type="text" name="month" id="month"></td>
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