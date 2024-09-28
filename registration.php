<?php include 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #E1DCC5; /* Soft background color */
            font-family: 'Arial', sans-serif;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 50px;
        }
        .form-card {
            background-color: #f9f9f9; /* Light card background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Max width for card */
            transition: transform 0.2s; /* Smooth hover effect */
        }
        .form-card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
        }
        h1 {
            margin-bottom: 20px; /* Space below title */
            color: #333; /* Darker text for title */
        }
        .form-label {
            color: #555; /* Lighter text for labels */
        }
        .btn-primary {
            background-color: #007bff; /* Custom primary button color */
            border: none; /* Remove border */
            transition: background-color 0.3s; /* Smooth color change */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker on hover */
        }
    </style>
</head>
<body>

<div class="container form-container">
    <div class="form-card">
        <h1>Sign Up</h1>
        
        <form method="post" action="registrationprocess.php">
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="name" required>
            </div>
            <div class="mb-3">
                <label for="studentId" class="form-label">Student ID:</label>
                <input type="text" class="form-control" id="studentId" name="studentid" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Create Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</div>

</body>
</html>
