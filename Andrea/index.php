<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action="index.php" method ="GET">
           Name: <input type="text"  name="name" />
           Surname: <input type ="text" name="surname" />
           <input  type="submit" name="submit"  />
       </form>



       <?php
       if( isset($_GET['submit']))
       {
           if( $_GET["name"] || $_GET["surname"] )
           {
               echo "Welcome ". $_GET[ 'name']." ".$_GET['surname'] . "<br />";
              
           }
           else {
            echo "Please enter your name!";
           }
       }

       
       ?>

<p>Calculator +</p>
<form action="index.php" method ="POST">
<p>
<input type="number" name="fNum" id="fNum" required="required" value="<?php echo $fNum; ?>" /> <b>First Number</b>
</p>
<p>
<input type="number" name="sNum" id="sNum" required="required" value="<?php echo $sNum; ?>" /> <b>Second Number</b>
</p>

<input type="submit" name="operator" value="Division" />
       </form>

<?php



 function divide (){
 $fNum = $_POST ['fNum'];
 $sNum = $_POST ['sNum'];
 $calc = $fNum / $sNum; 

 return $calc;
}
if(isset($_POST ["operator"])){
    echo "The answer is: " .divide();

}
?>
     
     

   


</body>
</html>