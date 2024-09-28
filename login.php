<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1 class="website-title">ProCare Solutions</h1>
        <nav>
            <ul>
                <li><a href="index.php" class="button">Home</a></li>
                <li><button type="button" class="btn btn-light" onclick="window.location.href='login.php';">Login</button></li>
                <li><a href="registration.php" class="button">Registration</a></li>
            </ul>
        </nav>
    </div>

    <!-- Login Form -->
    <div class="center-content">
        <form class="form_content" method="post" action="loginprocess.php">
            <h2 class="text">Login</h2>

            <label for="username">STUDENT ID</label>
            <input type="text" name="id" placeholder="Username" required><br><br>

            <label for="password">PASSWORD:</label>
            <input type="password" name="password" placeholder="Password" required><br><br>
            
            <input type="submit" class="cta-button" name="submit" value="LOGIN"><br><br>
            <a href="forgotpassword.php"> Forgot Password ?</a>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 ProCare Solutions. All rights reserved.</p>
    </div>
</body>
</html>
