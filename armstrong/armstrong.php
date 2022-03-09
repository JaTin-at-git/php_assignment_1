<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime or not</title>
</head>
<style>
    body {
        margin: 0;
        font-family: sans-serif;
    }

    .ml-lg {
        margin-left: 50px;
    }

    .green{
        color: green;
    }

    .goBack{
        text-decoration: none;
        position: absolute;
        bottom: 50px;
    }
</style>
<body>

<h1 class="ml-lg">A program to check if the given number is Armstrong or not:</h1>
<div class="ml-lg">
    <form action='<?php echo $_SERVER["PHP_SELF"] ?>' method="post">
        <label for="input">Enter number</label>
        <input type="number" name="input" id="input" >

        <br>

        <input type="submit" value="Check">
    </form>
    <?php
    function isArmstrong($input){
        //count the number of digits
        $len = strlen("".$input);
        $digits = str_split("".$input);
        $sum = 0;
        foreach ($digits as $num){
            $sum+=pow(intval($num),$len);
        }
        if ($sum == $input) return true;
        else return false;
    }
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
        if (isArmstrong($input)){
            print "<p class='green'>$input is Armstrong number</p>";
        } else{
            print "<p class='green'>$input is NOT Armstrong number</p>";
        }
    }
    ?>
</div>

<footer class="ml-lg">
    <a class="goBack" href="../index.php">&leftarrow; Go to home</a>
</footer>

</body>
</html>
