<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>

<body>
    <?php
    function gradeFunction($width, $height, $depth)
    {
        $area = $width * $height;
        $volume = $area * $depth;
        return [$area, $volume];
    }
    $return_area = gradeFunction(3.5, 4, 5);
    echo "The area of the box is: $return_area[0] <br>";
    echo "The volume of the box is: $return_area[1]";
    ?>
</body>

</html>