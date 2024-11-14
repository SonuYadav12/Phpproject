<?php

session_start();

// Database configuration
$host = 'localhost';
$db = 'furniture_db';
$user = 'root';
$pass = '';

try {

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    
    $conn = new mysqli($host, $user, $pass, $db);

    
    $conn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    
    error_log("Database connection error: " . $e->getMessage());

    echo json_encode(["status" => "error", "message" => "Unable to connect to the database. Please try again later."]);
    exit; 
}
?>
