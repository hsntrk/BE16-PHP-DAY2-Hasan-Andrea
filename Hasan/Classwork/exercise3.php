<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>

<body>
    <?php
    function gradeFunction($grade1, $grade2, $grade3)
    {
        $sum = $grade1 + $grade2 + $grade3;
        $average = $sum / 3;
        return [$sum, $average];

        // return $average;
    }
    $return_sum = gradeFunction(3, 4, 5);
    // $return_average = $return_sum / 3;
    echo "Sum: $return_sum[0] <br>";
    echo "Average: $return_sum[1]";
    ?>
</body>

</html>