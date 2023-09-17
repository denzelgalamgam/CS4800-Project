<!DOCTYPE html>
<html>
<head>
    <title>Hello World Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            text-align: center;
            margin-top: 100px;
        }

        .hello {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="hello">Hello, World!</h1>
        
        <form method="POST" action="">
            <label for="name">Enter Your Name:</label>
            <input type="text" id="name" name="name">
            <input type="submit" value="Submit">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            if (!empty($name)) {
                echo "<p>Hello, $name!</p>";
            } else {
                echo "<p>Please enter your name.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
