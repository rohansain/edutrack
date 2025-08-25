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

    include 'partials/aboutDB_connect.php';
    $gmail = $_POST["gmail"];
    $mobile = $_POST["mobile"];
    $Address = $_POST["Address"];
    $desc1 = $_POST["desc1"];
    $desc2 = $_POST["desc2"];

    $sql= "SELECT * FROM `about_info`";
    $D2_1result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($D2_1result);

if($num != 0){
    $D2_1row = mysqli_fetch_assoc($D2_1result);
    $getgmail = $D2_1row['gmail'];
}

    $num = mysqli_num_rows($result);
    $sql= "UPDATE `about_info` SET `desc1` = '$desc1', `desc2` = '$desc2', `mobile` = '$mobile', `gmail` = '$gmail' WHERE `about_info`.`gmail` = '$getgmail'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $showAlert = true;
    }
    else{
        $showError="try again latter";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Aabout.css">
    <title>Edit About -<?php $_SESSION['username']?>
    </title>
</head>

<body>
<?php
    if($showAlert){
    echo "<script>
    alert('About updated Successfully');
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
            <h1>Welcome -
                <?php echo $_SESSION['username']?>
            </h1>
            <p>here you can edit notice</p>
            <form action="Aabout.php" method="post">
        <table>
            <tr>
                <td><label for="gmail" >Gmail :</label></td>
                <td><input type="email" id="gmail" name="gmail" required></td>
            </tr>
            <tr>
                <td><label for="mobile" >Mobile:</label></td>
                <td><input type="number" id="deisig" name="mobile" required></td>
            </tr>
            <tr>
                <td><label for="Address" >Address :</label></td>
                <td colspan="3"><textarea rows="1" cols="50" placeholder="enter Address" name="Address" id="Address"></textarea></td>
            </tr>
            <tr>
                <td><label for="desc1" >Paragraph 1 :</label></td>
                <td colspan="3"><textarea rows="5" cols="50" placeholder="enter Paragraph 1" name="desc1" id="desc1"></textarea></td>
            </tr>
            <tr>
                <td><label for="desc2" >Paragraph 2 :</label></td>
                <td colspan="3"><textarea rows="5" cols="50" placeholder="enter Paragraph 2" name="desc2" id="desc2"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit"> </td>
                <td><input type="reset"></td>
            </tr>
        </table>
    </form>
        </main>
    </div>
</body>

</html>