<?php
require(__DIR__ . '/connect.php');

$registration_success = false;

if (isset($_POST['register'])) {
    $full_name = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $phone = trim($_POST['phone']);
    $agreed_terms = isset($_POST['terms']) ? 1 : 0;

  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } elseif ($password !== $confirm) {
        $error_message = "Passwords do not match.";
    } elseif (strlen($password) < 8) {
        $error_message = "Password must be at least 8 characters.";
    } else {
       
        $check_query = "SELECT id FROM users WHERE email = ?";
        $check_stmt = $conn->prepare($check_query);
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_stmt->store_result();

        if ($check_stmt->num_rows > 0) {
            $error_message = "An account with this email already exists.";
        } else {
            
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (full_name, email, password, phone_number, agreed_terms) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssssi", $full_name, $email, $hashed_password, $phone, $agreed_terms);

            if ($stmt->execute()) {
                $registration_success = true;
            } else {
                $error_message = "Error: " . $stmt->error;
            }
            $stmt->close();
        }
        $check_stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php if (isset($error_message)): ?>
    <script>
        $(document).ready(function () {
            Swal.fire({
                title: 'Error!',
                text: '<?= addslashes($error_message) ?>',
                icon: 'error',
                confirmButtonText: 'Try Again'
            });
        });
    </script>
<?php elseif ($registration_success): ?>
    <script>
        $(document).ready(function () {
            Swal.fire({
                title: 'Registration Successful!',
                text: 'Welcome to ByteBridge! You can now login.',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000
            }).then(() => {
                window.location.href = 'login&Register.php';
            });
        });
    </script>
<?php endif; ?>



</body>
</html>
