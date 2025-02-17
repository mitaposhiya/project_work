<?php
session_start();
include 'conn.php';

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    $email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
    $password = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query( $conn, $query );

    if ( mysqli_num_rows( $result ) > 0 ) {
        $user = mysqli_fetch_assoc( $result );
        $_SESSION[ 'userid' ] = $user[ 'id' ];

        $_SESSION[ 'name' ] = $user[ 'name' ];

        echo json_encode( [ 'status' => 'success', 'message' => 'Login successful!' ] );
        exit();
    } else {
        echo json_encode( [ 'status' => 'error', 'message' => 'Invalid email or password.' ] );
        exit();
    }
}

mysqli_close( $conn );
?>
