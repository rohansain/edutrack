<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("can't connect to server");
}

$Roll_no = $_POST['Roll_no'];
$class = $_POST['class'];
$test = $_POST['test'];


mysqli_select_db($conn,"result_class$class");

//getting first TEST marks of the student
$test_database = "class".$class."_".$test;
$sql= "select * from $test_database where rollnumber = ".$Roll_no;
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num != 0){
    $sql= "DELETE FROM `$test_database` WHERE rollnumber = ".$Roll_no;
    $result = mysqli_query($conn, $sql);
    $showAlert = true;

    
}
else{
    $showError = "please enter correct data or No record find";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Adeleteresult.css">
    <title>Delete Result</title>
</head>

<body>
<?php
    if($showAlert){
    echo "<script>
    alert('Result has been deleted');
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
            <h1>Delete Result</h1>
        <form action="Adeleteresult.php" method="post">
        <table>
            <tr>
                <td><label for="Roll_no" >Roll No :</label></td>
                <td><input type="text" id="Roll_no" name="Roll_no" required></td>
            </tr>
            <tr>
                <td><label for="class" >Class :</label></td>
                <td><select name="class" id="class">
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
                <option value="4">Class 4</option>
                <option value="5">Class 5</option>
                <option value="6">Class 6</option>
                <option value="7">Class 7</option>
                <option value="8">Class 8</option>
                <option value="9">Class 9</option>
                <option value="10">Class 10</option>
            </select></td>
            </tr>
            <tr>
                <td><label for="test" >test :</label></td>
                <td><select name="test" id="test">
                <option value="1">test 1</option>
                <option value="2">test 2</option>
                <option value="4">Half-yearly</option>
                <option value="3">test 3</option>
                <option value="5">Final year</option>
            </select></td>
            <tr>
                <td><input type="submit" name="resubmit" value="resubmit"> </td>
                <td><input type="reset" name="reset" value="reset"></td>
            </tr>
        </table>
    </form>
        </main>
    </div>
</body>

</html>