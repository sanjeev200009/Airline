<?php
require '../../Auth/connect.php';

$email = $_POST['email'];
$phone = $_POST['phone'];
$passport = $_POST['passport'];
$nationality = $_POST['nationality'];
$imageName = null;

if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $imageName = 'profile_' . uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['image']['tmp_name'], "../../uploads/" . $imageName);
}


if (!empty($_POST['profile_id'])) {
   
    $id = $_POST['profile_id'];
    $query = "UPDATE profiles SET email=?, phone=?, passport=?, nationality=?";
    $params = [$email, $phone, $passport, $nationality];

    if ($imageName) {
        $query .= ", image=?";
        $params[] = $imageName;
    }

    $query .= " WHERE id=?";
    $params[] = $id;

    $stmt = $conn->prepare($query);
    $stmt->execute($params);
} else {
   
    $stmt = $conn->prepare("INSERT INTO profiles (email, phone, passport, nationality, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$email, $phone, $passport, $nationality, $imageName]);
}

header("Location: ../../profile_form.php"); 
exit;
?>
