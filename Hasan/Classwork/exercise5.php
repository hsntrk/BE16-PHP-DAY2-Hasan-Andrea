<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>
</head>

<body>
    <?php
    function numberOfMinutes($minutes)
    {
        $hour = floor($minutes / 60);
        $rest = $minutes % 60;
        return [$minutes, $hour, $rest];
    }
    $return_hours = numberOfMinutes(200);
    echo $return_hours[0] . " minutes = " . $return_hours[1] . " and  {$return_hours[2]} <br>";
    ?>
</body>

</html>