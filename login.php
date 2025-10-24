<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit();
        } else {
            echo "<div class='thank-you-container'>
                    <h1>Incorrect Password</h1>
                    <p>Please try again.</p>
                    <a href='login.php'>Back to Login</a>
                  </div>";
            exit();
        }
    } else {
        echo "<div class='thank-you-container'>
                <h1>No Account Found</h1>
                <p>It looks like you don’t have an account yet.</p>
                <a href='signup.php'>Create Account</a>
              </div>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Comicklist</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>ComickList</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php" class="active">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>
</header>

<section>
    <form method="POST" class="contact-form">
        <h3>Login to Your Account</h3>
        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</section>
<center>
<footer>
    <p>&copy; 2025 ComickList. All rights reserved.</p>
</footer>
</center>

</body>
</html>
