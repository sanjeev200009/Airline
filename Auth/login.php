<?php 
require(__DIR__ . '/connect.php');
session_start(); // Start session to store login state

$login_success = false;

if (isset($_POST['login'])) {
    $login_id = trim($_POST['email']); 
    $password = $_POST['password'];

    // Query user by email (removed username)
    $query = "SELECT id, full_name, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $login_id);  
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['full_name'] = $user['full_name'];  
            $login_success = true;
        } else {
            $error_message = "Incorrect password.";
        }
    } else {
        $error_message = "No account found with that email.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
                title: 'Login Failed!',
                text: '<?= addslashes($error_message) ?>',
                icon: 'error',
                confirmButtonText: 'Try Again'
            });
        });
    </script>
<?php elseif ($login_success): ?>
    <script>
        $(document).ready(function () {
            Swal.fire({
                title: 'Login Successful!',
                text: 'Welcome back to ByteBridge!',
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(() => {
                window.location.href = '../index.php'; 
            });
        });
    </script>
<?php endif; ?>

</body>
</html>
