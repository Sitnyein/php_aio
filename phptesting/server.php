<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>server page</h1>
    <?php 
    //  include('./home.php');
    // require_once('./home.php');
    print_r($_REQUEST['name']);
    echo "<br>";
    print_r($_REQUEST);
    echo "<br>";
    print_r($_FILES);
    print_r($_POST['job']);
    echo "i am {$_POST['name']}";
    ?>
</body>
</html>