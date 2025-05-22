<?php
require '../../Auth/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $departure_city = $_POST['departure_city'] ?? '';
    $arrival_city = $_POST['arrival_city'] ?? '';
    $departure_date = $_POST['departure_date'] ?? '';
    $return_date = $_POST['return_date'] ?? '';
    $passengers = $_POST['passengers'] ?? '';
    $class = $_POST['class'] ?? '';
    $direct_flights_only = isset($_POST['direct_flights_only']) ? 1 : 0;

    // Prepare the statement
    $stmt = mysqli_prepare($conn, "INSERT INTO flights (departure_city, arrival_city, departure_date, return_date, passengers, class, direct_flights_only) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        // Bind parameters (s = string, i = integer)
        mysqli_stmt_bind_param($stmt, "ssssisi", $departure_city, $arrival_city, $departure_date, $return_date, $passengers, $class, $direct_flights_only);

        if (mysqli_stmt_execute($stmt)) {
            echo "Flight booking has been successfully recorded!";
        } else {
            echo "Execution failed: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Preparation failed: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
