<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage Summer Login</title>
    <style>
        body {
            display: flex;
            background-color:#FFFFFF;
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
            color:#50413C;
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
        input[type=submit]{
        width: 50%;
        background-color:#4CAF50;
        color:white;
        padding:14px 20px; 
        margin:8px 0;
        border: none;
        border-radius:4px;
        cursor: pointer;
    }
    input[type=submit]:hover{
        background-color: #F58340;
    }
    button{
        width:50%;
        background-color: #F58340;
        border-radius:30px;
        color:white;
        padding: 5px 5px; 
        margin:8px 0px;
        border:none;
    }
        
       
        
    </style>
</head>
<body>
    <section class="login-container">

<!--signup form-->

<div class="form">
    
    
    <h3><a href="index.php"><img src="images/Home/logo.png" alt="page logo" height="100pxpx" width="250px"></a></h3>
    
    <form action="includes/signup.inc.php"method="post">
        <input type="text" id="fname" name="name"placeholder="Name">
        <input type="text" id="fname" name="email"placeholder="Email">
        <input type="text" id="fname" name="uid"placeholder="username">
        <input type="text" id="1name" name="pwd"placeholder="Password">
        <input type="text" id="1name" name="pwdrepeat"placeholder="Repeat password">
<button name="submit" type="submit">Register </button>

</form>
<p>already have an account?<a href="login.php">Log in.</p>
</div>
</section>
</body>
</html>

