<?php
session_start();
include("config.php");

// kontrola či je uživateľ prihlásený
if (!isset($_SESSION['user_id'])) {
    die("Error: User not logged in.");
}
$user_id = $_SESSION['user_id'];

include("db_connect.php");

// získanie cesty k profilovému obrázku
$sql = "SELECT profile_image FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $profile_image_path);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);
mysqli_close($conn);

if (empty($profile_image_path)) {
    $profile_image_path = 'uploads/default_user.jpg';
}

// html časť - sidebar
include("html/sidebar_layout.php");
?>