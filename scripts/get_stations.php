<?php
function getStations() {
 
    include "db.php";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example: Select stations from the database
    $sql = "SELECT * FROM stations";
    $result = $conn->query($sql);

    $stations = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $stations[] = $row;
        }
    }

    $conn->close();
    return $stations;
}

// Handle AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Call the getStations function
    $stations = getStations();

    // Return the stations as JSON
    echo json_encode($stations);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
