<?php
require '../../Auth/connect.php'; 

header('Content-Type: application/json; charset=utf-8');

$response = [
    'status' => 'error',
    'message' => 'ID not provided or invalid.'
];

// Use POST here since your form sends POST
if (isset($_POST['profile_id']) && is_numeric($_POST['profile_id'])) {
    $id = intval($_POST['profile_id']); 

    $stmt = mysqli_prepare($conn, "DELETE FROM profiles WHERE id = ?");
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id); 
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $response['status'] = 'success';
            $response['message'] = "Record with ID $id deleted successfully.";
        } else {
            $response['message'] = "No record found with ID $id.";
        }

        mysqli_stmt_close($stmt);
    } else {
        $response['message'] = "Failed to prepare the delete statement.";
    }
} else {
    $response['message'] = "ID not provided or invalid.";
}

mysqli_close($conn);

echo json_encode($response);
exit;
?>
