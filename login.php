<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="wrapper">
            <form action="login-action.php" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required name="Username"> 
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required name="Password">
                    <i class='bx bxs-lock-alt'></i> 
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox" name="checkbox"> Remember me </label>
                    <a href="#">Forgot password</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="register-link">
                    <p>Don't have an account?<a href="register.php"> Register</a></p>
                </div>
            </form>
        </div>
    </body>
</html>