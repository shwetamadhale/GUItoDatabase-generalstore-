<?php

session_start();
header('location: secondpage.php');
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'generalstorewebpage');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select* from tablename where name='$name' && password = '$pass'";
$result = mysqli_num_rows($result, $s);

if($num == 1)
{
    header('location: thirdpage.php');
}
else{
    header('location: secondpage.php');
}
?>