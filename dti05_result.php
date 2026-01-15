<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <meta http-equiv="refresh" content="3;url=dti05.php"> 
</head>
<body>
    <h1>
        Result Page
    </h1>
    <?php
    
        $num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
        $num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;

        if ($num2 == 0) {
            echo "<b style='color:red;'>Cannot divide by zero. Returning to main page in 3 seconds...</b>";
        } else {
            $result = $num1 / $num2;
            echo 'Money: ' . $num1 . ' Baht <br>';
            echo 'People: ' . $num2 . ' People <br>';
            echo "<b>Total: " . $result . "</b><br>";
            echo "<p style='color:gray;'>Returning to main page in 3 seconds...</p>";
        }
    ?>
</body>
</html>