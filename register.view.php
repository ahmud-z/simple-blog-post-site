<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="box">
        <h2>REGISTER A ACCOUNT</h2>
        <form class="user-input" action="register.php" method="post">
            Username <br>
            <input type="text" name="username" required placeholder="Enter your name"><br>
            Email Address <br>
            <input type="email" name="email" required placeholder="Enter your email"><br>
            Password <br>
            <input type="text" name="password" required placeholder="Enter your password"><br><br>
            <button class="login-btn">Register</button>
        </form>
        <p class="have-acc">
            Already have an account?
            <a href="/login.view.php">Login</a>
        </p>
    </div>

</body>

</html>