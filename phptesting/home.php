<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./about.php">about</a>
    <a href="./ex1.php">youtube</a>
    <h1>home page</h1>
    <?php
    session_start();
    $_SESSION['name'] = "sesssion mgmg"; //session create
     echo "hello world this is home page";
     $name = "mgmg";
     //cookie create 
     setcookie('phone','09999999',time()+ 10);
    ?>
</body>
</html>