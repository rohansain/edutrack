<?php
include 'partials/aboutDB_connect.php'; //isse database or table apne aap ban jayenge
$sql = "select * from about_info";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);

if ($num != 0) {
    $desc1 = $row['desc1'];
    $desc2 = $row['desc2'];
    $address = $row['address'];
    $mobile = $row['mobile'];
    $gmail = $row['gmail'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Uabout.css">
</head>

<body>


    <?php require 'nav.php' ?>

    <section id="about-section">
        <!-- about left  -->
        <div class="about-left">
            <img src="../photo/about.png" alt="About Img" />
        </div>

        <!-- about right  -->
        <div class="about-right">
            <h4>Roaem Public School</h4>
            <h1>About us</h1>
            <p><?php echo $desc1 ?> </p>
            <p><?php echo $desc2 ?></p>
            <div class="address">
                <ul>
                    <li>
                        <span class="address-logo">
                        </span>
                        <p>Address</p>
                        <span class="saprater">:</span>
                        <p><?php echo $address ?></p>
                    </li>
                    <li>
                        <span class="address-logo">
                        </span>
                        <p>Phone No</p>
                        <span class="saprater">:</span>
                        <p>+91<?php echo $mobile ?></p>
                    </li>
                    <li>
                        <span class="address-logo">
                        </span>
                        <p>Email ID</p>
                        <span class="saprater">:</span>
                        <p><?php echo $gmail ?></p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <?php require 'Ufooter.php' ?>

</body>

</html>