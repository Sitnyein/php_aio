<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>database conection running</h1>
    <?php 
    //mysqli_connect('hostname','username','password','databaseName');
    $connection = mysqli_connect('localhost','root','','security');
     
     if($connection) {
        echo "database connect sucess";
     } else { die('conection fail'.mysquli_connection_error());
        }
    ?>
</body>
</html>