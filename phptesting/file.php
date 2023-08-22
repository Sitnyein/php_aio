<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" enctype="multipart/form-data">
        <input type="file" name="uploadfile"  >
        <input type="submit" value="save upload photo" name="click">
    </form>
    <?php 
         if(isset($_POST['click'])) {
            echo "success"; 
            echo "<pre>";
            print_r($_FILES);
            echo "<br>";
            $image= $_FILES['uploadfile'];
            $imgname= $image['name'];
            $tmpname= $image['tmp_name'];
           
          $location = './image/' . $imgname;
        move_uploaded_file($tmpname, $location); 


         }
    ?>
</body>
</html>
