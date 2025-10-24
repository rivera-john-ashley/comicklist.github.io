<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact - Comicklist</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Contact</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<li><a href='logout.php'>Logout (" . $_SESSION['username'] . ")</a></li>";
            } else {
                echo "<li><a href='login.php'>Login</a></li>";
                echo "<li><a href='signup.php'>Sign Up</a></li>";
            }
            ?>
        </ul>
        </ul>
    </nav>
</header>

<section>
  

    <div class="contact-form">
        <h3>Send us a Message</h3>
        <form method="POST">
            <label>Name:</label>
            <input type="text" name="name" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Message:</label>
            <textarea name="message" rows="5" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</section>
<center>
<footer>
    <p>&copy; 2025 ComickList. All rights reserved.</p>
</footer>
        </center>
</body>
</html>
