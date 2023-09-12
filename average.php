<!DOCTYPE html>
<html>

<head>
    <title>Average Calculator</title>
</head>

<body>
    <h1>Calculate Average of Numbers</h1>
    <form method="post" action="">
        Enter numbers separated by commas (e.g., 1,2,3,4): <input type="text" name="numbers">
        <input type="submit" name="calculate" value="Calculate Average">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        // Get the input values and split them into an array
        $input = $_POST['numbers'];
        $numbers = explode(',', $input);

        // Initialize variables to store the sum and count of numbers
        $sum = 0;
        $count = 0;

        // Calculate the sum and count of numbers
        foreach ($numbers as $number) {
            $num = trim($number); // Remove any extra whitespace
            if (is_numeric($num)) {
                echo "$num";
                echo "<br>";
                $sum += $num;
                $count++;
            }
        }

        // Calculate and display the average
        if ($count > 0) {
            $average = $sum / $count;
            echo "<p>Average: $average</p>";
        } else {
            echo "<p>No valid numbers entered. Please enter numeric values separated by commas.</p>";
        }
    }
    ?>
</body>

</html>