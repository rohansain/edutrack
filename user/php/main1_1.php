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
            <form action="show_result1_1.php" method="POST" target="_blank">
                <label for="sclass">Select Class</label>
                <select name="sclass" id="sclass">
                    <option value="1">Class 1</option>
                    <option value="2">Class 2</option>
                    <option value="3">Class 3</option>
                    <option value="4">Class 4</option>
                    <option value="5">Class 5</option>
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