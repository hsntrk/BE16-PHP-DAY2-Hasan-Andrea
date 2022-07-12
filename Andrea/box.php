<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="box.php" method ="POST">
<p>
<input type="number" name="width" id="width" required="required" value="<?php echo $width; ?>" /> <b>Width</b>
</p>
<p>
<input type="number" name="height" id="height" required="required" value="<?php echo $depth; ?>" /> <b>Height</b>
</p>
<input type="number" name="depth" id="depth" required="required" value="<?php echo $height; ?>" /> <b>Depth</b>
</p>
<input type="submit" name="operator" value="Area + volume" />


       </form>

<?php 




function box ()
{
    $height = $_POST ['height'];
 $width = $_POST ['width'];
 $depth = $_POST ['depth'];
if ($height && $width && $depth ) {
    $area = $width*$height;
 $volume = $width*$height*$depth;

 return [$area,$volume];
} else {
    return "Not valid!";
}
 
   
   
}
if(isset($_POST ["operator"])){
    if(box() == "Not valid!") {
        echo box();
    }
    else  
    echo "The area of the box is: " . box()[0]. " The volume of the box is: " . box()[1];
    }






?>

   

</body>
</html>