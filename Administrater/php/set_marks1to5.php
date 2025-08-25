<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("can't connect to server");
}

if($_POST['A_SUBMIT_BUTTON'] == 'submit'){
    $sclass = $_POST['sclass'];
    $sroll = $_POST['A_ROLLNO_INPUT'];
    $stest = $_POST['stest'];
    $shindi = $_POST['A_HINDI_INPUT'];
    $senglish = $_POST['A_ENGLISH_INPUT'];
    $smath = $_POST['A_MATHS_INPUT'];
    $sevs = $_POST['A_EVS_INPUT'];
    $sgk = $_POST['A_GK_INPUT'];
    
    $totalmark = $shindi+$senglish+$sevs+$smath+$sgk;
    
    // var_dump($shindi);

    $database = 'result_class'.$_POST['sclass'];
    mysqli_select_db($conn,$database);

    $tablename = "class".$sclass.'_'.$stest;
    // echo $tablename."</br>";



    $sql= "select * from $tablename where rollnumber = ".$sroll;
    // echo $sql."</br>";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    // echo $num;  
    if($num==0){//means no data is recorded in the list
        $sql = "INSERT INTO `$tablename` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('$sroll', '$senglish', '$shindi', '$smath', '$sevs', '$sgk', '$totalmark');";
        mysqli_query($conn,$sql);

        echo "
        <!DOCTYPE html>
<html lang='en'>
<head>
    <title>successfully</title>
</head>
<body>
    <?php require 'Anav.php' ?>
    <main class='content'>
        <h1>Record Added successfully</h1>
        <p>Thank you</p>
        <a href='./Amain.php'>Go to main link</a>
    </main>
</body>
</html>
        ";
    }
    else if($num == 1){
        echo "
        
        <!DOCTYPE html>
<html lang='en'>
<head>
    <title>Already Present</title>
</head>
<body>
    <?php require 'Anav.php' ?>
    <main class='content'>
        <h1>data is already present</h1>
        <p>Thank you</p>
        <a href='./Amain.php'>Go to main link</a>
    </main>
</body>
</html>
        ";
    }
else{
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <title>Error</title>
    </head>
    <body>
        <?php require 'Anav.php' ?>
        <main class='content'>
            <h1>Something went wrong Try Again Later</h1>
            <p>Thank you</p>
            <a href='./Amain.php'>Go to main link</a>
        </main>
    </body>
    </html>
        ";
}
}
?>