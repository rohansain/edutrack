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
    $sroll = $_POST['B_ROLLNO_INPUT'];
    $stest = $_POST['stest'];
    $shindi = $_POST['B_HINDI_INPUT'];
    $senglish = $_POST['B_ENGLISH_INPUT'];
    $smath = $_POST['B_MATHS_INPUT'];
    $science = $_POST['B_SCIENCE_INPUT'];
    $sst = $_POST['B_SOCIALSCIENCE_INPUT'];
    $french = $_POST['B_SANSKRIT_INPUT'];
    $totalmark = $shindi + $senglish + $sst + $smath + $french + $science;
    // $totalmark = $shindi + $senglish + $smath;
    // var_dump($totalmark);



    $database = 'result_class'.$_POST['sclass'];
    mysqli_select_db($conn,$database);

    $tablename = "class".$sclass.'_'.$stest;



    $sql= "select * from $tablename where rollnumber = ".$sroll;
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num==0){//means no data is recorded in the list
        $sql = "INSERT INTO `$tablename` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('$sroll', '$senglish', '$shindi', '$smath', '$science', '$sst', '$french', '$totalmark');";
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
}
else{
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <title>Error</title>
    </head>
    <body>
        <main class='content'>
            <h1>Something went wrong Try Again Later</h1>
            <p>Thank you</p>
            <a href='./Amain.php'>Go to main link</a>

        </main>
    </body>
    </html>
        ";
}
?>