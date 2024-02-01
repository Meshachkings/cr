<?php

function addCase($case_name, $select_station, $case_status, $section_of_law, $incident_date, $description, $police_id) {
    
    include "db.php";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example: Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO cases (case_name, select_station, case_status, section_of_law, incident_date, description, police_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $case_name, $select_station, $case_status, $section_of_law, $incident_date, $description, $police_id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Case added successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error adding case: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}

// Handle AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract form data
    $case_name = $_POST['case_name'];
    $select_station = $_POST['select_station'];
    $case_status = $_POST['case_status'];
    $section_of_law = $_POST['section_of_law'];
    $incident_date = $_POST['incident_date'];
    $description = $_POST['description'];
    $police_id = $_POST['police_id'];

    // Perform server-side validation (add your own validation rules)

    // Call the addCase function
    addCase($case_name, $select_station, $case_status, $section_of_law, $incident_date, $description, $police_id);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
