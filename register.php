<<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
        .container {
            width: 320px;
            margin: 80px auto;
            background: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        button {
            background: #0070f3;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <form method="POST" action="store.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <!-- Hidden fields -->
        <input type="hidden" name="country" id="country">
        <input type="hidden" name="latitude" id="lat">
        <input type="hidden" name="longitude" id="lon">

        <button type="submit">Submit</button>
    </form>
</div>



</body>
</html>

