<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ProCare Solutions</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1 class="website-title">BOOK SHOP</h1>
        <nav>
            <ul>
                <li><a href="index.php" class="button">Home</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li><span class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></span></li>
                    <li><button type="button" class="btn btn-light" onclick="window.location.href='logout.php';">Logout</button></li>
                <?php else: ?>
                    <li><button type="button" class="btn btn-light" onclick="window.location.href='login.php';">Login</button></li>
                    <li><a href="registration.php" class="button">Registration</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="center-content">
        <h2>Welcome MY BOOK SHOP</h2>
    
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2023 ProCare Solutions. All rights reserved.</p>
    </div>
</body>
</html>
