<?php

session_start();


$con = mysqli_connect('localhost', 'root', 'Dragonball1.');


mysqli_select_db($con, 'useregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = "SELECT * FROM `newusertable`= '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  $reg= " insert into usertable(name , password) values ('$name', '$pass', '$email')";
  mysqli_query($con,$reg);
   header('location:home.php');
  echo"Registration Successful";
}else{

    echo"Username Already Taken";
}
?>
