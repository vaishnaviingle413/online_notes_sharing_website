<?php

session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

include "db.php";

if (isset($_POST['upload'])) {

    $student_name = $_POST['student_name'];
    $subject_name = $_POST['subject_name'];
    $note_title = $_POST['note_title'];

    $file_name = $_FILES['note_file']['name'];
    $temp_name = $_FILES['note_file']['tmp_name'];

    // Upload folder
    $upload_folder = "uploads/";

    // Create folder if it doesn't exist
    if (!is_dir($upload_folder)) {
        mkdir($upload_folder, 0777, true);
    }

    $file_path = $upload_folder . basename($file_name);

    // Move uploaded file
    if (move_uploaded_file($temp_name, $file_path)) {

        $sql = "INSERT INTO notes
                (student_name, subject_name, note_title, file_name)
                VALUES (?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param(
            $stmt,
            "ssss",
            $student_name,
            $subject_name,
            $note_title,
            $file_name
        );

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>
                    alert('Notes uploaded successfully!');
                    window.location.href='notes.html';
                  </script>";
        } else {
            echo "Database Error: " . mysqli_error($conn);
        }

    } else {
        echo "File upload failed.";
    }
}
?>