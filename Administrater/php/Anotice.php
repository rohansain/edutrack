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

    include 'partials/noticeDB_connect.php';
    // echo "hello";
    $subject = $_POST["subject"];
    $fname = $_POST["fname"];
    $deisig = $_POST["desig"];
    $desc = $_POST["desc"];


    $sql= "SELECT * FROM `notice_info`";
    $D2_1result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($D2_1result);

if($num != 0){
    $D2_1row = mysqli_fetch_assoc($D2_1result);
    $getdate = $D2_1row['date'];
}

    $sql= "UPDATE `notice_info` SET `subject` = '$subject', `date` = current_timestamp(), `description` = '$desc', `name` = '$fname', `designation` = '$deisig' WHERE `notice_info`.`date` = '$getdate'";
    $result = mysqli_query($conn, $sql);
    // $num = mysqli_num_rows($result);
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
    <link rel="stylesheet" href="../css/Anotice.css">
    <title>Edit Notice -<?php $_SESSION['username']?>
    </title>
</head>

<body>
<?php
    if($showAlert){
    echo "<script>
    alert('Notice Added Successfully');
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
            <form action="Anotice.php" method="post">
        <table>
            <tr>
                <td><label for="subject" >subject :</label></td>
                <td><input type="text" id="subject" name="subject" required>
            </tr>
            <tr>
                <td><label for="fname" >Name :</label></td>
                <td><input type="text" id="fname" name="fname" required></td>
            </tr>
            <tr>
                <td><label for="desig" >Designation :</label></td>
                <td><input type="text" id="deisig" name="desig" required></td>
            </tr>
            <tr>
                <td><label for="desc" >Description :</label></td>
                <td colspan="3"><textarea rows="5"cols="50" placeholder="enter notice" name="desc" id="desc"></textarea></td>
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