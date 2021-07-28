<?php
session_start();
header('location:thirdpage.php');
$con = mysqliconnect('localhost','root','');
mysqli_select_db($con,'generalstorewebpage');

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$desig = $_POST['desig'];
$doj = $_POST['doj'];
$wsect = $_POST['wsect'];

$_SESSION['user'] = $fname;
$reg = "insert into tablename1('fname','mname', 'lname', 'dob', 'desig', 'doj', 'wsect')  values('$fname','$mname', '$lname', '$dob', '$desig', '$doj', '$wsect')";
mysqli_query($con, $reg);
header('location: home.php');

?>

