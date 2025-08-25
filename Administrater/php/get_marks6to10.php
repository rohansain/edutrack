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
            <marquee behaviour="" direction="">Please Submit Marks from 6 to 10th Class</marquee>
            <form action="set_marks6to10.php" method="POST">
                <div class="main">
                    <div class="container">
                        <span name="B_ROLLNO_WORD" class="head">ROLL NO</span>
                        <span class="head">:</span>
                        <span class=""><input type="number" name="B_ROLLNO_INPUT"></span>
                    </div>
                    <div class="container">
                        <span name="A_class_word" class="head">class</span>
                        <span class="head">:</span>
                        <span class="sclass1">
                            <select name="sclass" id="sclass">
                                <option value="6">Class 6</option>
                                <option value="7">Class 7</option>
                                <option value="8">Class 8</option>
                                <option value="9">Class 9</option>
                                <option value="10">Class 10</option>
                            </select><br /></span>
                    </div>
                    <div class="container">
                        <span name="A_class_word" class="head">Test</span>
                        <span class="head">:</span>
                        <span class="sclass1">
                            <select name="stest" id="stest">
                                <option value="1">Test 1</option>
                                <option value="2">Test 2</option>
                                <option value="3">Test 3</option>
                                <option value="4">Half</option>
                                <option value="5">Final</option>
                            </select><br /></span>
                    </div>
                    <div class="container">
                        <span name="B_SUBJECT_WORD" class="head">SUBJECTS</span>
                        <span class="head"></span>
                        <span name="B_MARKS_WORD" class="">MARKS</span>
                    </div>
                    <table>
                        <th name="B_HINDI_WORD">HINDI</th>
                        <td>:</td>
                        <td><input type="number" name="B_HINDI_INPUT"></td>
                        </tr>
                        <tr>
                            <th name="B_ENGLISH_WORD">ENGLISH</th>
                            <td>:</td>
                            <td><input type="number" name="B_ENGLISH_INPUT"></td>
                        </tr>
                        <tr>
                            <th name="B_MATHS_WORD">MATHS</th>
                            <td>:</td>
                            <td><input type="number" name="B_MATHS_INPUT"></td>
                        </tr>
                        <tr>
                            <th name="B_SCIENCE_WORD">SCIENCE</th>
                            <td>:</td>
                            <td><input type="number" name="B_SCIENCE_INPUT"></td>
                        </tr>
                        <tr>
                            <th name="B_SOCIALSCIENCE_WORD">SOCIAL SCIENCE</th>
                            <td>:</td>
                            <td><input type="number" name="B_SOCIALSCIENCE_INPUT"></td>
                        </tr>
                        <tr>
                            <th name="B_SANSKRIT_WORD">FRENCH</th>
                            <td>:</td>
                            <td><input type="number" name="B_SANSKRIT_INPUT"></td>
                        </tr>
                        <tr>
                            <th><input type="submit" class="button" name="A_SUBMIT_BUTTON" value="submit"></th>
                            <th><input type="reset" class="button" name="A_RESET_BUTTON" value="reset"></th>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
</body>

</html>