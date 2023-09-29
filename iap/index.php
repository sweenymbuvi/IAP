<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
        }

        /* Shorter input boxes */
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="submit"] {
            margin-bottom: 10px;
            padding: 8px; /* Adjust the padding for a shorter input box */
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Information Form</h2>
        <form method="post" action="process/process.php">
            <label for="id">ID Number:</label>
            <input type="text" name="id" id="id" placeholder="ID NUMBER" required>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="FULL NAME" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="EMAIL ADDRESS" required>

            <label for="age">Age:</label>
            <input type="number" name="age" id="age" placeholder="AGE" required>

            <input type="submit" value="Submit">
            <a href="process/display.php" class="button">View Details</a>
        </form>
    </div>
</body>
</html>
