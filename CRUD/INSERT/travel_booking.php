<?php
require '../../Auth/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and receive POST data
    $destination = isset($_POST['destination']) ? trim($_POST['destination']) : '';
    $departure_date = isset($_POST['departure_date']) ? trim($_POST['departure_date']) : null;
    $return_date = isset($_POST['return_date']) && $_POST['return_date'] !== '' ? trim($_POST['return_date']) : null;
    $adults = isset($_POST['adults']) ? (int)$_POST['adults'] : 1;
    $children = isset($_POST['children']) ? (int)$_POST['children'] : 0;
    $infants = isset($_POST['infants']) ? (int)$_POST['infants'] : 0;
    $budget = isset($_POST['budget']) ? (float)$_POST['budget'] : 0;

    // Prepare the SQL insert statement
    $sql = "INSERT INTO travel_bookings (destination, departure_date, return_date, adults, children, infants, budget) VALUES (?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param(
            "sssiiid",
            $destination,
            $departure_date,
            $return_date,
            $adults,
            $children,
            $infants,
            $budget
        );

        if ($stmt->execute()) {
            // Redirect or echo success message
            echo "Booking saved successfully.";
            // You can redirect after success if needed:
            // header('Location: success_page.php');
            // exit();
        } else {
            echo "Error saving booking: " . htmlspecialchars($stmt->error);
        }
        $stmt->close();
    } else {
        echo "Prepare failed: " . htmlspecialchars($conn->error);
    }
}
?>
