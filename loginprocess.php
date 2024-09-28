<?php
include("connection.php");
session_start(); // Start the session

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $password = $_POST["password"];

    // SQL query to check for valid user credentials
    $sql = "SELECT * FROM users WHERE id='$id' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    // Check if user exists
    if ($user) {
        $_SESSION['username'] = $user['name']; // Store the user's name in the session
        echo '<script>
                window.location.href = "index.php";
                alert("Login successful!");
              </script>';
    } else {
        echo '<script>
                window.location.href = "login.php";
                alert("Invalid credentials!");
              </script>';
    }
}
?>
