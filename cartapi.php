<?php
include 'conn.php';

if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    $product_id = intval( $_POST[ 'productid' ] );
    $session_id = $_SESSION[ 'userid' ];

}

$conn->close();
?>
