<?php
include("connection.php");

if (isset($_POST["submit"])) {
    // Get form data
    $username = $_POST["name"];
    $id = $_POST["studentid"]; // Ensure this matches the input name in your form
    $email = $_POST["email"];
    $password = $_POST["password"]; // Store plain text password

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $count_user = $result->num_rows;

    if ($count_user == 0) {
        // Prepare insert statement
        $stmt = $conn->prepare("INSERT INTO users (name, id, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $id, $email, $password); // Store plain text password

        if ($stmt->execute()) {
            // Registration successful
            header("Location: index.php");
            exit(); // Ensure no further code is executed after redirection
        } else {
            // Insert failed, display error
            echo '<script>alert("Error: Could not register. Please try again.");</script>';
        }
    } else {
        echo '<script>
                alert("User ID already exists!");
                window.location.href = "registration.php"; // Redirect to the registration page
              </script>';
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
