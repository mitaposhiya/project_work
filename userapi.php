<?php
include 'conn.php'; 
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    if ($data) {
     
        $name = mysqli_real_escape_string($conn, $data['name']);
        $email = mysqli_real_escape_string($conn, $data['email']);
        $password = mysqli_real_escape_string($conn, $data['password']);
        $confirmpassword = mysqli_real_escape_string($conn, $data['confirmpassword']);
        $gender = mysqli_real_escape_string($conn, $data['gender']);
        $age = mysqli_real_escape_string($conn, $data['age']);


        $result = mysqli_query($conn, "INSERT INTO users (name, email, password, confirm_password, gender, age)
                                       VALUES ('$name', '$email', '$password', '$confirmpassword', '$gender', '$age')");

  
        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'User registered successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to register user.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid data received.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}

$conn->close();
?>
