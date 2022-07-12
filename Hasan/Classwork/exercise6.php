<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
</head>

<body>

    <form method="POST" style="margin: 10px;">
        Firstname: <input type="text" name="name" /><br>
        Lastname: <input type="text" name="surname" /><br>
        Age: <input type="text" name="age" /><br>
        Hobbies: <input type="text" name="hobbies" /><br>

        <br>
        <input type="submit" name="submit" />
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST["name"] || $_POST["surname"] || $_POST["age"] || $_POST["hobbies"]) {

            if (strlen($_POST["name"]) > 5) {
                $color = "green";
            } else {
                $color = "red";
            };
            echo "<br><div>Please insert your name and insert your surname and older</div>";


            echo "<br><div>Welcome <span style='color: $color'> {$_POST['name']} </span> </div>";
            echo "<div>Your lastname is {$_POST['surname']} . </div>";
            echo "<div>You are {$_POST['age']} years old. </div>";
            echo "<div>Your hobbies are {$_POST['hobbies']} </div>";
        };
    };



    ?>

</body>

</html>