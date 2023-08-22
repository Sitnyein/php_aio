<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $hour = 10; ?>
<p>
 <?php if($hour < 6 || $hour > 18): ?>
 <b>Night Time</b>
 <?php else: ?>
 <i>Day Time</i>
 <?php endif ?>

 
</p>
<?php $gender= "male"; ?>
<p>
<?php if($gender == "don't know"): ?>
  <b>this is i don't know</b>
<?php elseif($gender =="female"): ?>
    <i>female</i>
<?php else: ?>
    <i>male</i>
    <?php endif ?>    
</p>
 <br>
<?php
$name = "Bob";
function hello() {
 global $name;
 echo $name;
}
hello();
echo isset($names); // Empty
$names = "Bob";
echo isset($names); 
echo "<br>";
define("MAX", 10);
echo MAX;
?>
</body>
</html>