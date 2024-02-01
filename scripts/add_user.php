<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);



function addUser($user_name, $user_type, $police_id, $user_password, $state) {
    include "db.php";

    $hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, user_type, username, password, state) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $user_name, $user_type, $police_id, $hashedPassword, $state);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'User added successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error adding user: ' . $stmt->error]);
    }

    $conn->close();
}


function getUsers() {
    // Replace this with your database connection code
    include "db.php";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Example: Retrieve all users from the database
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $users = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    $conn->close();

    return $users;
}


//@POST()
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract form data
    $user_name = $_POST['user_name'];
    $state = $_POST['state'];
    $user_type = $_POST['user_type'];
    $police_id = $_POST['police_id'];
    $user_password = $_POST['user_password'];

    // Perform server-side validation (add your own validation rules)

    // Call the addUser function
    addUser($user_name, $user_type, $police_id, $user_password, $state);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}



// //@GET()
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     // Call the getUsers function
//     $users = getUsers();

//     // Return the users as a JSON response
//     echo json_encode(['status' => 'success', 'users' => $users]);
// } else {
//     // Invalid request method
//     echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
// }


?>


