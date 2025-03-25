<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="./style/result.css">
</head>
<body>
    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $op = $_GET["op"];

        echo '<div class="container">';
        if($op == "div" && $num2 == 0) {
            echo "<h1>Fatal Error: Division By Zero</h1>";
            echo "<p>Try dividing by another number!</p>";
        }
        else if($num1 == "" || $num2 == "" || !is_numeric($num1) || !is_numeric($num2)) {
            echo "<h1>Fatal Error: Invalid Values</h1>";
            echo "<p>Use numbers to perform operations!</p>";
        }
        else {
            switch($op) {
                case "sum" : $result = $num1 + $num2; break;
                case "sub" : $result = $num1 - $num2; break;
                case "mul" : $result = $num1 * $num2; break;
                default : $result = $num1 / $num2;
            }
            echo '<h1>Result:</h1>';
            echo "<p>$result</p>";
        }

        echo '<a href="./index.html"><button>Go Back</button></a></div>';
        die();
    ?>
</body>
</html>