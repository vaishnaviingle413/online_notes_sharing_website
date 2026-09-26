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
    <title>Upload Notes</title>
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
    <a href="upload_form.php">Upload Notes</a>
    <a href="login.html">Login</a>
    <a href="contact.html">Contact</a>
    <a href="about.html">About</a>
</nav>

<section style="padding:40px; text-align:center;">
    <h2>Upload Your Notes</h2>

    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <input type="text" name="student_name"
        placeholder="Student Name" required><br><br>

        <input type="text" name="subject_name"
        placeholder="Subject Name" required><br><br>

        <input type="text" name="note_title"
        placeholder="Note Title" required><br><br>

        <input type="file" name="note_file" required><br><br>

        <input type="submit" name="upload"
        value="Upload Notes">

    </form>

</section>

<footer>
    <p>© 2026 Online Notes Sharing Website | All Rights Reserved</p>
</footer>

</body>
</html>