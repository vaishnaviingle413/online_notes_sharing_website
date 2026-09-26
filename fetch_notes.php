<?php

include "db.php";

$sql = "SELECT * FROM notes ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

$notes = array();

if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {
        $notes[] = $row;
    }

}

header('Content-Type: application/json');

echo json_encode($notes);

?>