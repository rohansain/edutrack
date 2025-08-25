<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Marks 1st TO 5th</title>
    <link rel="stylesheet" href="../css/get_marks.css">

<title>Document</title>
</head>

<body>

    <div class="app">
        <?php require 'Anav.php' ?>        
        <div class="content">
        <marquee behaviour="" direction="">Please Submit Marks from 1 to 5th Class</marquee>
        <form action="set_marks1to5.php" method="Post">
            <div class="main">
                <div class="container">
                    <span name="A_ROLLNO_WORD" class="head">ROLL NO</span>
                    <span class="head">:</span>
                    <span class=""><input type="number" name="A_ROLLNO_INPUT" required></span>
                </div>
                <div class="container">
                    <span name="A_class_word" class="head">class</span>
                    <span class="head">:</span>
                    <span class="sclass1">
                        <select name="sclass" id="sclass">
                            <option value="1">Class 1</option>
                            <option value="2">Class 2</option>
                            <option value="3">Class 3</option>
                            <option value="4">Class 4</option>
                            <option value="5">Class 5</option>
                        </select><br/></span>
                </div>
                <div class="container">
                    <span name="A_Test" class="head">Test</span>
                    <span class="head">:</span>
                    <span class="stest">
                        <select name="stest" id="stest">
                            <option value="1">Test 1</option>
                            <option value="2">Test 2</option>
                            <option value="3">Test 3</option>
                            <option value="4">Half</option>
                            <option value="5">Final</option>
                        </select><br/></span>
                </div>
                <div class="container">
                    <span name="A_SUBJECT_WORD" class="head">SUBJECTS</span>
                    <span class="head"></span>
                    <span name="A_MARKS_WORD" class="">MARKS</span>
                </div>
                <table>
                    <tr>
                        <th name="A_HINDI_WORD">HINDI</th>
                        <td>:</td>
                        <td ><input type="number" name="A_HINDI_INPUT" required></td>
                    </tr>
                    <tr>
                        <th name="A_ENGLISH_WORD">ENGLISH</th>
                        <td>:</td>
                        <td><input type="number" name="A_ENGLISH_INPUT" required></td>
                    </tr>
                    <tr>
                        <th name="A_MATHS_WORD">MATHS</th>
                        <td>:</td>
                        <td><input type="number" name="A_MATHS_INPUT" required></td>
                    </tr>
                    <tr>
                        <th name="A_EVS_WORD">EVS</th>
                        <td>:</td>
                        <td><input type="number" name="A_EVS_INPUT" required></td>
                    </tr>
                    <tr>
                        <th name="A_GK_WORD">G.K.</th>
                        <td>:</td>
                        <td><input type="number" name="A_GK_INPUT" required></td>
                    </tr>
                    <tr>
                        
                        <!-- <th ><button class="button" name="A_SUBMIT_BUTTON">SUBMIT</button>
                        <th><button class="button" name="A_RESET_BUTTON">RESET</button></th> -->
                        <th><input type="submit" class="button" name="A_SUBMIT_BUTTON" value="submit"></th>
                        <th><input type="reset" class="button" name="A_RESET_BUTTON" value="reset"></th>
                    </tr>
                </table>
            </div>
    </form>
</div>
</body>

</html>