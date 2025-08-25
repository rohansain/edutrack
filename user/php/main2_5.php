<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/result/main.css">

</head>

<body>
    <?php require 'nav.php' ?>



    <div class="head_main">
        <h1>Rajsthan Board of Secondary Education, Ajmer</h1>

    </div>

    <div class="container_main">
        <div class="main">
            <h1>RESULT</h1>
            <hr />
            <form action="show_result2_5.php" method="POST" target="_blank">
                <label for="sclass">Select Class</label>
                <select name="sclass" id="sclass">
                    <option value="6">Class 6</option>
                    <option value="7">Class 7</option>
                    <option value="8">Class 8</option>
                    <option value="9">Class 9</option>
                    <option value="10">Class 10</option>
                </select><br />
                <label for="roll">Roll Number</label>
                <input type="number" name="rollnumber" id="roll" placeholder="Roll no." required><br />
                <label for="sdob">DOB</label>
                <input type="date" name="sdob" id="sdob"><br />
                <input type="submit" value="Submit" class="button submit"> <input type="reset" value="Reset" class="button reset">
            </form>
        </div>
    </div>
</body>

</html>