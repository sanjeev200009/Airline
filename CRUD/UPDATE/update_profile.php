<?php
require '../../Auth/connect.php'; // Your MySQLi connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize inputs
    $id = isset($_POST['profile_id']) && is_numeric($_POST['profile_id']) ? intval($_POST['profile_id']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $passport = isset($_POST['passport']) ? trim($_POST['passport']) : '';
    $nationality = isset($_POST['nationality']) ? trim($_POST['nationality']) : '';

    if (!$id) {
        die("Invalid profile ID.");
    }

    // Basic validation (add more robust validation as needed)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Optional: Handle image upload if exists
    $imageName = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../../uploads/';
        $tmpName = $_FILES['image']['tmp_name'];
        $originalName = basename($_FILES['image']['name']);
        $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

        $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($ext, $allowedExts)) {
            die("Invalid image format. Allowed: jpg, jpeg, png, gif.");
        }

        // Create a unique file name to prevent overwriting
        $imageName = uniqid('profile_', true) . '.' . $ext;
        $destination = $uploadDir . $imageName;

        if (!move_uploaded_file($tmpName, $destination)) {
            die("Failed to upload image.");
        }
    }

    // Prepare SQL UPDATE query
    if ($imageName) {
        $sql = "UPDATE profiles SET email = ?, phone = ?, passport = ?, nationality = ?, image = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'sssssi', $email, $phone, $passport, $nationality, $imageName, $id);
    } else {
        $sql = "UPDATE profiles SET email = ?, phone = ?, passport = ?, nationality = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ssssi', $email, $phone, $passport, $nationality, $id);
    }

    if ($stmt) {
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            // Success: redirect or output success message
            header('Location: ../../profile.php?update=success');
            exit;
        } else {
            echo "No changes made or profile not found.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to prepare the update statement.";
    }
} else {
    echo "Invalid request method.";
}

mysqli_close($conn);
?>
