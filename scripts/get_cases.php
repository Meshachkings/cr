<?php

function getCases() {

    include "db.php";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example: Select data from the database
    $sql = "SELECT * FROM cases";
    $result = $conn->query($sql);

    $cases = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cases[] = $row;
        }
    }

    $conn->close();
    return $cases;
}

// Handle AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Call the getCases function
    $cases = getCases();

    // Return the cases as JSON
    echo json_encode(['status' => 'success', 'cases' => $cases]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
