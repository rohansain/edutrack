<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Aaddmission_request.css">
    <title>Addmission Request</title>
</head>

<body>
    <div class="app">

        <?php require 'Anav.php' ?>
        <main class="content">
            <form action="Aaddmission_request2.php" method="post">
                <table>
                    <tr>
                        <td><label for="class">Class :</label></td>
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
                        <td><input type="submit" name="resubmit" value="submit"> </td>
                        <td><input type="reset" name="reset" value="reset"></td>
                    </tr>
                </table>
            </form>
        </main>
    </div>
</body>

</html>