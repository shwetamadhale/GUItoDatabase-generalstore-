<?php

session_start();
if(!isset($_SESSION['user'])){
    header('location: secondpage.php');
}
?>

<html>
    <head>
        <title>Home Page </title>
    </head>
    <body>
        <div class = "container">
        < a href = "logout.php"> Log Out</a>
        <h1> Welcome <?php echo $_SESSION['user']; ?> </h1>
</div>
</body>

</html>