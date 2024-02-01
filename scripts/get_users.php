<?php
// Assuming you have a function to handle database operations
// Replace this with your actual function
function getUsers() {
    // Replace this with your database connection code
    include "db.php";
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example: Select data from the database
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $users = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    $conn->close();
    return $users;
}

// Handle AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Call the getUsers function
    $users = getUsers();

    // Return the users as JSON
    echo json_encode(['status' => 'success', 'users' => $users]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
