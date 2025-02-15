<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage Summer Login</title>
    <style>
        body {
            display: flex;
            background-color: #FFFFFF;
            font-family: Arial, sans-serif;
        }
        .login-container {
            align-items: center;
            width: 800px;
            height: 400px;
            padding: 20px;
            background-color: #FFCC63;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin: auto;
            margin-top: 100px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #50413C;
            font-size: 32px;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 40px);
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            border-bottom: 1px solid #ccc;
            outline: none;
        }
        input[type=submit] {
            width: 100%;
            background-color: #F58340;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #F58340;
        }
        button {
            width: 50%;
            background-color: #F58340;
            border-radius: 30px;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
        }
    </style>
</head>
<body>
    <section class="login-container">
        <div class="form">
            <h2><a href="index.php"><img src="images/Home/logo.png" alt="page logo" height="100px" width="250px"></a></h2>
            <form action="" method="post">
                <input type="text" id="fname" name="uid" placeholder="Email/Username" required>
                <input type="password" id="fname" name="pwd" placeholder="Password" required>
                <button name="submit" type="submit">Login</button>
            </form>
            <p>New here? <a href="signup.php">Register.</a></p>
        </div>
    </section>

    <?php
    include 'dbconnect.php';

    if (isset($_POST['submit'])) {
        $username = $_POST['uid'];
        $password = $_POST['pwd'];

        // Query to check if the user exists
        $query = mysqli_query($conn, "SELECT * FROM `users` WHERE userUid = '$username'");

        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            // Verify the password
            if (password_verify($password, $row['usersPwd'])) {
                $_SESSION['usersId'] = $row['usersId']; // Store the usersId in the session
                $_SESSION['userUid'] = $row['userUid']; // Optionally store other user information
                header('location: index.php'); // Redirect to the homepage or any other page
            } else {
                echo '<p class="message">Invalid username or password 1</p>';
            }
        } else {
           echo '<p class="message">Invalid username or password 2</p>';
        }
    }
    ?>
</body>
</html>
