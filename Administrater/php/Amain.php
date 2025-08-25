<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Amain.css">
    <title>Welcome -
        <?php $_SESSION['username']?>
    </title>
</head>

<body>
    <div class="app">

        <?php require 'Anav.php' ?>
        <main class="content">
            <h1>Welcome -
                <?php echo $_SESSION['username']?>
            </h1>
            <p>here you can edit content of your school website</p>
        </main>
    </div>
</body>

</html>