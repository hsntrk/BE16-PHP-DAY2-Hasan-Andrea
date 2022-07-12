<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    function divideFunction($num1, $num2)
    {
        $divide = $num1 / $num2;
        return  [$num1, $num2, $divide];
    }
    $return_value = divideFunction(30, 2);
    echo "Returned Divided value from $return_value[0] and $return_value[1] the function is $return_value[2]";
    ?>
</body>

</html>