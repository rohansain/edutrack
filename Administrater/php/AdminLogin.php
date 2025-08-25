<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="AdminLogincss.css">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->

    <title>Admin Login</title>

</head>

<body>
    <div class="box">
        <form action="login.php" method="post">
            <div class="container">

                <div class="top">
                    <header>Login</header>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="aname">
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" naem="apass">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="submit" name="submit" class="submit" value="submit" id="">
                </div>
            </div>
        </form>
    </div>
</body>

</html>