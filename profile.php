<?php
session_start();
include("config.php");

// kontrola, či je uživateľ prihlásený
if (!isset($_SESSION['user_id'])) {
    die("Error: User not logged in.");
}
$user_id = $_SESSION['user_id'];

// pripojenie do databázy
include("db_connect.php");

// získanie profilových údajov uživateľa
$stmt = $conn->prepare("SELECT username, profile_image FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username, $profileImage);
$stmt->fetch();
$stmt->close();

// nastavenie predvoleného profilového obrázka ak iný nie je dostupný
if (empty($profileImage)) {
    $profileImage = "default_user.png";
}

//html časť - stránka uživateľského profilu
include("html/profile_layout.php")
?>


