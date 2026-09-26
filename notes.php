<?php
include "db.php";

$sql = "SELECT * FROM notes";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Notes - Online Notes Sharing Website</title>
    <link rel="stylesheet"href="style.css">
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
    <a href="logout.php">Logout</a>
    <a href="register.html">Register</a>
    <a href="contact.html">Contact</a>
    <a href="about.html">About</a>
</nav>

<section class="notes">
    <h2>Available Notes</h2>
    <div class="card-container">

<

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<div class="card">
    <h3><?php echo $row['note_title']; ?></h3>
    <p>Subject: <?php echo $row['subject_name']; ?></p>
    <p>Uploaded by: <?php echo $row['student_name']; ?></p>

    <a href="uploads/<?php echo rawurldecode($row['file_name']); ?>" download>
    Download
</a>
</div>

<hr>

<?php
}
?>
</div>
</section>

<footer>
    <p>© 2026 Online Notes Sharing Website | All Rights Reserved</p>
</footer>

</body>
</html>