<?php
session_start();

function getUserByUsername($username) {
    // Replace this with your database connection code
   include "db.php";
    
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $conn->close();
        return $user;
    } else {
        $conn->close();
        return null;
    }
}

// Handle AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $keepSignedIn = isset($_POST['keepSignedIn']) ? $_POST['keepSignedIn'] : false;

    $user = getUserByUsername($username);

    if ($user !== null && password_verify($password, $user['password'])) {
        // Successfully authenticated
        $response = ['status' => 'success', 'message' => 'Login successful!, redirecting...'];

        // Store user details in the session
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['state'] = $user['state'];
        $_SESSION['station_id'] = $user['station_id'];
        $_SESSION['rank'] = $user['rank'];
        

        if ($keepSignedIn) {
            setcookie('user_id', $user['user_id'], time() + (30 * 24 * 3600), '/');
        }

        echo json_encode($response);
    } else {
        // Failed authentication
        $response = ['status' => 'error', 'message' => 'Invalid username or password'];
        echo json_encode($response);
    }
} else {
    // Invalid request method
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
