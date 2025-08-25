<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/db_connect.php';
    $username = $_POST["aname"];
    $password = $_POST["apass"];


    $sql = "Select * from password where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: Amain.php");
    } else {
        $showError = "WRONG PASSWORD OR USERNAME";
    }
}

?>



<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel="stylesheet" href="../css/AdminLogincss.css">

    <title>Admin Login</title>

</head>

<body>
    <?php
    if ($showError) {
        echo "<script>
    alert('$showError');
</script>";
    }
    ?>
    <div class='box'>
        <form action='login.php' method='post'>
            <div class='container'>

                <div class='top'>
                    <header>Login</header>
                </div>

                <div class='input-field'>
                    <input type='text' class='input' placeholder='username' name='aname'>
                </div>

                <div class='input-field'>
                    <input type='Password' class='input' placeholder='Password' name='apass'>
                </div>

                <div class='input-field'>
                    <input type='submit' name='submit' class='submit' value='submit'>
                </div>
            </div>
        </form>
    </div>
</body>

</html>