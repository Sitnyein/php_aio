

<?php


// $sql = new mysqli('localhost','root','password');
// if($sql->connect_error) {
//     die("Connection failed : . $sql->connect_error");
// } else{
//     echo "Connected sucessfully";
// }
$con = mysqli_connect("localhost","root","","test");
if($con == true) {
    echo "connected successfully";
}
?>