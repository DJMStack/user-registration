<?php

session_start();


$con = mysqli_connect('localhost','root', 'Dragonball1.');

mysqli_select_db($con, 'useregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = "select * from newusertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
   header('location:home.php');
}else{
header('location:login.php');
echo "One of the fields are invaild. Please try again";
}

?>
