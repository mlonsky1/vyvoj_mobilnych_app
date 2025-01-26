<?php
include ("config.php");
include ("db_connect.php");

$registrationSuccess = false; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // kontrola pripojenia k databáze
    if (!$conn) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Kontrola unikátnosti prihlasovacieho mena
    $checkUser = $conn->prepare("SELECT id FROM users WHERE username = ?");
    if (!$checkUser) {
        die("Prepare failed for checking username: (" . $conn->errno . ") " . $conn->error);
    }

    $checkUser->bind_param("s", $username);
    $checkUser->execute();
    $checkUser->store_result();

    if ($checkUser->num_rows > 0) {
        $error = "Prihlasovacie meno je obsadené.";
    } elseif ($password !== $confirm_password) {
        $error = "Heslá sa nezhodujú.";
    } else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
        if (!$stmt) {
            die("Prepare failed for inserting user: (" . $conn->errno . ") " . $conn->error);
        }

        $stmt->bind_param("ss", $username, $password_hash);

        if ($stmt->execute()) {
            $registrationSuccess = true;
        } else {
            $error = "Error during execution: " . $stmt->error;
        }
        $stmt->close();
    }
    $checkUser->close();
}

include("html/register_layout.php")
?>

