<?php
require '../../Auth/connect.php';

$sql = "SELECT * FROM profiles ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

$profiles = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $profiles[] = $row;
    }
    echo json_encode($profiles);
} else {
    echo json_encode(["error" => "Query failed"]);
}
?>
