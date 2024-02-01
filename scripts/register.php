<?php

 error_reporting(E_ALL);
 ini_set('display_errors', 1);
function registerUser($username, $email, $state, $password, $terms) {
    $response = [
        'status' => 'failed',
        'msg' => 'Invalid request.'
    ];

    $conn = new mysqli("localhost", "root", "", "crime");

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, state, password) VALUES ('$username', '$email', '$state', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        // echo json_encode(['status' => 'success', 'message' => 'User registered successfully']);
        $response['status'] = 'success';
        $response['msg'] = 'Registration successful!, redirecting...';
        echo json_encode($response);
    } else {
        $response['msg'] = 'Error: Registration failed. Please try again later.';
        echo json_encode($response);
        // echo json_encode(['status' => 'error', 'message' => 'Error registering user']);
    }

    $conn->close();
}

// Handle AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $password = $_POST['password'];
    $terms = isset($_POST['terms']) ? $_POST['terms'] : false;

    // Perform server-side validation (add your own validation rules)

    // Call the registerUser function
   registerUser($username, $email, $state, $password, $terms);
 
    
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
