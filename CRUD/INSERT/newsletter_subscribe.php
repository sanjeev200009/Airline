<?php
require '../../Auth/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    $email_safe = mysqli_real_escape_string($conn, $email);
    $query = "INSERT INTO newsletter_subscribers (email) VALUES ('$email_safe')";

    if (mysqli_query($conn, $query)) {
        echo "Thank you for subscribing!";
    } else {
        if (mysqli_errno($conn) == 1062) {
            echo "This email is already subscribed.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
