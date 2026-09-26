<?php
include "db.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (student_name, email, password)
        VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Registration Successful!');
            window.location.href='login.html';
          </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>