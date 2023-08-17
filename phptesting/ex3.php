<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
     //var let const
    $name = "sithu"; // local scope in php
     define("Name","codelab");
     $arr=['mango','apple','banana'];
     define("arr",$arr);
     echo Name;
     function message() {
        echo $name."hello sithu";
        echo "<br>";
        echo Name."hello codelab";
        echo "<br>";
        echo arr[1]."is delicious";
     }
       echo "<br>";
       message();
       echo "<br>";
       echo "*********************************************************************************";

       $encName = md5($name); //encrypt md5() sha1() crypt($name,"st")
       echo $encName;
       echo "<br>";
       //password hash
       $password = "password1234";
       $hashpass = password_hash($password, PASSWORD_BCRYPT);
       echo $hashpass;
       echo "<br>";
       echo password_verify("password1234",$hashpass)?"true":"false";
       date_default_timezone_set('Asia/Yangon');
       echo "<br>";
       echo date("d-M-Y | h:i:a");
       echo "<br>";
       $currentdate= date_create(date("d-M-Y"));
       date_add($currentdate,date_interval_create_from_date_string("10 days"));
       echo date_format($currentdate,"d-M-Y");
    ?>
</body>
</html>