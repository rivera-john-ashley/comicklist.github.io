<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About - Comicklist</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>About</h1>
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
<center>
<section>
    <h2>About</h2>
    <p>ComickList is your go-to platform for reading comics and manga online. We provide free, easy, and fun access to your favorite stories from around the world.</p>
    <p>Join our community of readers and discover new adventures every day!</p>
</section>
        

<footer>
    <p>&copy; 2025 ComickList. All rights reserved.</p>
</footer>
        </center>

</body>
</html>
