<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
            text-align: center;
        }

        button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
    <title>Checkbox Form</title>
</head>
<body>

    <form>
        <h2>Checkbox Form</h2>
        <label for="checkbox1">
            <input type="checkbox" id="checkbox1" name="checkbox1"> Checkbox 1
        </label><br>

        <label for="checkbox2">
            <input type="checkbox" id="checkbox2" name="checkbox2"> Checkbox 2
        </label><br>

        <label for="checkbox3">
            <input type="checkbox" id="checkbox3" name="checkbox3"> Checkbox 3
        </label><br>

        <label for="checkbox4">
            <input type="checkbox" id="checkbox4" name="checkbox4"> Checkbox 4
        </label><br>

        <label for="checkbox5">
            <input type="checkbox" id="checkbox5" name="checkbox5"> Checkbox 5
        </label><br>

        <p>Textový obsah formuláře</p>

        <button type="button">Accept</button>
    </form>

</body>
</html>
