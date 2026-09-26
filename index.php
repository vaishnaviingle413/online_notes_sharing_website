<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Notes - Online Notes Sharing Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Online Notes Sharing Website</h1>
    <p>Share and Download Notes Easily</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="notes.php">Notes</a>
    <a href="upload.html">Upload Notes</a>
    <a href="login.html">Login</a>
    <a href="logout.php">logout</a>
    <a href="register.html">Register</a>
    <a href="contact.html">Contact</a>
    <a href="about.html">About</a>
</nav>

<section class="notes">

    <h2>Available Notes</h2>

    <div class="card-container">

        <div class="card">
            <h3>Java Notes</h3>
            <p>Complete Java programming notes.</p>
            <a href="notes.php">
                <button>View Notes</button>
            </a>
        </div>


        <div class="card">
            <h3>Python Notes</h3>
            <p>Python programming study material.</p>
            <a href="notes.php">
                <button>View Notes</button>
            </a>
        </div>


        <div class="card">
            <h3>SPM Notes</h3>
            <p>Complete Software Project Management notes.</p>
            <a href="notes.php">
                <button>View Notes</button>
            </a>
        </div>

    </div>

</section>


<footer>
    <p>© 2026 Online Notes Sharing Website | All Rights Reserved</p>
</footer>

</body>
</html>