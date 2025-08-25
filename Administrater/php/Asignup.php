<?php

// only verified user can add other user
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
    $cpassword = $_POST["CPassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `password` (`sno`, `username`, `password`, `data`) VALUES ('', '$username', '$password', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        // echo "DATA ADDED SUCCESSFULLY";
        $showAlert = true;
    }
    else{
        // echo "PASSWORD DO NOT MATCH OR USERNAME EXIST";
        $showError = "Passwords do not match";
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
    alert('NEW ADMIN ADDED');
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
        <form action="Asignup.php" method="post">
            <div class="container">

                <div class="top">
                    <header>signup</header>
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
                    <input type="Password" class="input" placeholder="Confirm-Password" name="CPassword" required>
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="submit" name="submit" class="submit" value="submit" id="">
                </div>
            </div>
        </form>
    </div>
    </main>
</div>
</body>

</html>