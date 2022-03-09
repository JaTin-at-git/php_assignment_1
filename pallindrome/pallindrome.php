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

    .green {
        color: green;
    }

    .goBack {
        text-decoration: none;
        position: absolute;
        bottom: 50px;
    }
</style>
<body>

<h1 class="ml-lg">A program to check if the input is Palindrome or not:</h1>
<div class="ml-lg">
    <form action='<?php echo $_SERVER["PHP_SELF"] ?>' method="post">
        <label for="input">Enter number</label>
        <input type="text" name="input" id="input">

        <br>

        <input type="submit" value="Check">
    </form>
    <?php
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
        if (isPalindromeJ($input)) {
            print "<p class='green'>$input is Palindrome.</p>";
        } else {
            print "<p class='green'>$input is NOT Palindrome.</p>";
        }
    }
    function isPalindrome($input)
    {
        $temp = $input;
        $sum = 0;
        $rem = 0;
        $multiplier = 1;

        for ($i = 0; $temp != 0; $i++) {
            $rem = $temp % 10;
            $sum += $rem * $multiplier;
            $temp = intval($temp / 10);

            $multiplier *= 10;
            echo "<br>rem: $rem";
            echo "<br>sum: $sum";
            echo "<br>temp: $temp<br>";
        }

        if ($input == $sum) return true;
        else return false;
    }

    function isPalindromeJ($input)
    {
        //convert input into string
        $input = strval($input);

        //get all the chars from the string
        $chars = str_split($input);

        //initialize the variable to store the reversed string
        $reversed = "";

        //concat the chars from the reversed chars array
        for ($i = sizeof($chars) - 1; $i >= 0; $i--) {
            $reversed .= $chars[$i];
        }

        //return the result
        if ($reversed == $input) return true;
        else return false;
    }

    ?>
</div>

<footer class="ml-lg">
    <a class="goBack" href="../index.php">&leftarrow; Go to home</a>
</footer>

</body>
</html>


