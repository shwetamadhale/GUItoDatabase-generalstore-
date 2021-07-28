<?php
    session_start();
header('location: secondpage.php');
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'generalstorewebpage');

$name=$_POST['user'];
$pass=$_POST['password'];
$emailid=$_POST['emailid'];
$phoneno =$_POST['phoneno'];

$s="select * from tablename where name='$name'";
$result = mysqli_num_rows($con, $s);
$num = mysqli_query($result);

if($num == 1)
{
    echo"Username already taken!";
}
else{
    $reg = "insert into tablename('user', 'password', 'emailid', 'phoneno') values('$name','$pass','$emailid','$phoneno')";
    mysqli_query($con, $reg);
    echo("Registration Successful");
}
?>