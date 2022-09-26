<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="header">
     <h2>Log In</h2>
    </div>
    <form action="login.php" method="$_POST">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
    </div>
    <button type="submit" name="login_user">Log In</button>
    <p>Not a user?<a href="registration.php">Register Here</a></p>
    </form>
</body>
</html>