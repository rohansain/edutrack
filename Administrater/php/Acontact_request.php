<?php

// only verified user can add other user
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<?php
    include 'partials/contactDB_connect.php';
    // is detail ke according ham data fetch krenge
    $sql= "SELECT * FROM request_info";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $display="<tr>
    <th>Sr.no</th>
    <th>Name</th>
    <th>Last Name</th>
    <th>IsStudent</th>
    <th>Mobile</th>
    <th>Gmail</th>
    <th>Ask for</th>
    <th>Information</th>
    <th>Time</th>
</tr>";
    if(!$num==0){


    for($i=1; $i<=$num; $i++){
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $isstudent = $row['isstudent'];
        $gmail = $row['gmail'];
        $mobile = $row['mobile'];
        $query = $row['query'];
        $query_info = $row['query_info'];
        $time = $row['time'];

        $display.="<tr>
        <td>$i</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$isstudent</td>
        <td>$mobile</td>
        <td>$gmail</td>
        <td>$query</td>
        <td>$query_info</td>
        <td>$time</td>
    </tr>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Aaddmission_request2.css">
    <title>Addmission Request</title>
</head>

<body>
    <div class="app">

        <?php require 'Anav.php' ?>
        <main class="content">
        <table>
            <thead></thead>
            <caption>Contact Request</caption>
        
        <?php echo $display?>
    </table>
        </main>
    </div>
</body>

</html>