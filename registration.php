<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
     </div>
     <form action="registration.php" method="$_POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="email">Email/Phone number</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="cpassword">Confirm Password</label>
            <input type="cpassword" name="cpassword" required>
        </div>
        <button type="submit">Submit</button>
        <p>Already a user?<a href="login.php"><b>Log in</b></a></p>
     </form>

    </div>
</body>
</html>