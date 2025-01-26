<?php
session_start();
include("config.php");

// kontrola či je uživateľ prihlásený
if (!isset($_SESSION['user_id'])) {
    die("Error: User not logged in.");
}

$user_id = $_SESSION['user_id'];
$new_username = trim($_POST['username']);

if (empty($new_username)) {
    die("Error: Username cannot be empty.");
}

if (strlen($new_username) > 50) {
    die("Error: Username is too long.");
}

include("db_connect.php");

// nahrávanie profilovej fotky
$profile_image_path = null;

if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
    $target_dir = "uploads/";
    if (!is_dir($target_dir) || !is_writable($target_dir)) {
        die("Error: vybraný súbor neexistuje alebo nemáte povolenie na jeho manipuláciu");
    }

    $file_name = basename($_FILES['profile_picture']['name']);
    $target_file = $target_dir . $file_name;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate file type
    $allowed_types = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($file_type, $allowed_types)) {
        die("Error: Only JPG, JPEG, PNG, and GIF files are allowed.");
    }

    // Move uploaded file
    if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
        $profile_image_path = $target_file;
    } else {
        die("Error: vyskytol sa problém s nahrávaním profilovej fotky.");
    }
}

// aktualizácia profilových údajov uživateľa
if ($profile_image_path) {
    // If a profile picture is uploaded
    $sql = "UPDATE users SET username = ?, profile_image = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $new_username, $profile_image_path, $user_id);
} else {
    // If no profile picture is uploaded
    $sql = "UPDATE users SET username = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "si", $new_username, $user_id);
}

if (mysqli_stmt_execute($stmt)) {
    header('Location: index.php?menu=4');
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
