<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ComickList</title>
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
            <?php
            if (isset($_SESSION['username'])) {
                echo "<li><a href='logout.php'>Logout (" . $_SESSION['username'] . ")</a></li>";
            } else {
                echo "<li><a href='login.php'>Login</a></li>";
                echo "<li><a href='signup.php'>Sign Up</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>

<section>
    <h2>Welcome to ComickList</h2>
    <p>Read your favorite manga and comics anytime, anywhere!</p>

  <div class="content">
    <h2>Top 3 Manhwa</h2>
    <<section class="container">
    <a href="https://webtoonlibrary.com/webtoon/solo-leveling/" class="img img1">
        <span>Solo Leveling</span>
    </a>

    <a href="https://www.webtoons.com/en/drama/lookism/list?title_no=1049" class="img img2">
        <span>Lookism</span>
    </a>

    <a href="https://www.mangaread.org/manga/the-beginning-after-the-end/" class="img img3">
        <span>TBATE</span>
    </a>
</section>


<footer>
    <p>&copy; 2025 ComickList. All rights reserved.</p>
</footer>

</body>
</html>
