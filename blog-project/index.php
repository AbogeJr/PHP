<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MySpace</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <h1>MySpace <small>by AJ</small></h1>
        <div class="container">
            <div class="signup">
                <h2>Sign Up</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <label for="u_name">Username</label><br>
                    <input type="text" name="u_name" placeholder="Enter username:"><span class="error">* <?php echo $u_name_err;?></span><br>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder="you@example.com" ><span class="error">* <?php echo $email_err;?></span><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password"><span class="error">* <?php echo $password_err;?></span><br>
                    <label for="repassword">Repeat password</label><br>
                    <input type="password" name="repassword"><span class="error">* <?php echo $repassword_err;?></span><br>
                    <label for="gender">Gender</label><span class="error">* <?php echo $gender_err;?></span><br>
                    <input type="radio" name="gender" value="male">Male<br>
                    <input type="radio" name="gender" value="female">Female<br>
                    <input type="radio" name="gender" value="other">Other <br>
                    <input type="submit" name="signup" value="Sign Up"><br>
                </form>
            </div>
            <div class="login">
                <h2>Log In</h2>
                <form action="login.php" default="10" method="post">
                    <label for="u_name">Username</label><br>
                    <input type="text" name="u_name" placeholder="Enter username:"><br>
                    <label for="password">Pasword</label><br>
                    <input type="password" name="password"><br>
                    <input type="submit" name="login" value="Log In">
                </form>   
            </div>
        </div>

    </body>
</html>