<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Additionals</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Array to store checked messages
        $checkedMessages = [];

        // Check each checkbox and add checked messages to the array
        if (isset($_POST['checkbox1'])) {
            $checkedMessages[] = "i accepted Privacy Policy";
        }
        if (isset($_POST['checkbox2'])) {
            $checkedMessages[] = "I am over 18";
        }
        if (isset($_POST['checkbox3'])) {
            $checkedMessages[] = "i Accepted all rules";
        }
        if (isset($_POST['checkbox4'])) {
            $checkedMessages[] = "I am a Customer Testimonial";
        }
        if (isset($_POST['checkbox5'])) {
            $checkedMessages[] = "i want a Premium Version";
        }

    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Additionals</h2>
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1"> privacy policy 
        </label><br>

        <label for="checkbox2">
            <input type="checkbox" id="checkbox2" name="checkbox2"> I am over 18
        </label><br>

        <label for="checkbox3">
            <input type="checkbox" id="checkbox3" name="checkbox3"> Accept all rules
        </label><br>

        <label for="checkbox4">
            <input type="checkbox" id="checkbox4" name="checkbox4"> I am a Customer Testimonial
        </label><br>

        <label for="checkbox5">
            <input type="checkbox" id="checkbox5" name="checkbox5"> Premium Version
        </label><br>

        <button type="submit">Accept</button>
    </form>

    <?php
    foreach ($checkedMessages as $message) {
        echo "- $message<br>";
    }
    ?>
</body>
</html>
