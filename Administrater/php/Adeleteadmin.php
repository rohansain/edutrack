<?php

// only verified user can delete other user
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'partials/db_connect.php';
    $username = $_POST["username"];
    $password = $_POST["Password"];
    $sql= "SELECT * FROM `password` WHERE `username` = '$username' AND `password` = '$password';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

        if($num != 0){
            $sql= "DELETE FROM `password` WHERE `username` = '$username' AND `password` = '$password';";
            mysqli_query($conn, $sql);
            $showAlert = true;

        }
        else{
            // echo "PASSWORD DO NOT MATCH OR USERNAME EXIST";
            $showError = "Please Enter Correct data";
        }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/Adminlogincss.css">

    <title>Admin signup</title>

</head>

<body>
<?php
    if($showAlert){
    echo "<script>
    alert('Delete Admin Successfully');
</script>";
    }
    if($showError){
    echo "<script>
    alert('$showError');
</script>";
    }
    ?>
	<div class="app">
<?php require 'Anav.php' ?>
<main class="content">
    <div class="box">
        <form action="Adeleteadmin.php" method="post">
            <div class="container">

                <div class="top">
                    <header>Delete admin</header>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username" required>
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" name="Password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="submit" name="submit" class="submit" value="Delete Admin" id="">
                </div>
            </div>
        </form>
    </div>
    </main>
</div>
</body>

</html>