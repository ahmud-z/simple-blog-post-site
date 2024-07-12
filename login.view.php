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
        <h2>LOGIN YOUR ACCOUNT</h2>
        <form class="user-input" action="login.php" method="post">
            Email Address <br>
            <input type="email" name="email" required placeholder="Enter your email"><br>
            Password <br>
            <input type="text" name="password" required placeholder="Enter your password"><br><br>
            <button class="login-btn">Login</button>
        </form>
        <div class="new-acc-btn">
            <a href="register.php"> <button>Create new account</button> </a>
        </div>
    </div>
</body>

</html>