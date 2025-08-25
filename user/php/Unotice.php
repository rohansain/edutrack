<?php
include 'partials/noticeDB_connect.php'; //isse database or table apne aap ban jayenge
$sql = "select * from notice_info";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);

if ($num != 0) {
    $subject = $row['subject'];
    $date = $row['date'];
    $description = $row['description'];
    $name = $row['name'];
    $designation = $row['designation'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Roaem Public Schoolr</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Unotice.css">

</head>

<body>


    <?php require 'nav.php' ?>

    <div class='notice_container'>
        <div class='main_notice'>
            <center>
                <h2>Roaem Public School</h2>
                <h1>Notice</h1>
                <h2><?php echo $subject ?></h2>
            </center>
            <h3>Date:&nbsp;<?php echo $date ?></h3>
            <br>
            <b>
                <p><?php echo $description ?></p>
            </b>
            <br>
            <h3><?php echo $name ?><br>
                <?php echo $designation ?><br>
                Roaem Public School</h3>
        </div>
        <?php require 'Ufooter.php' ?>
    </div>
</body>

</html>