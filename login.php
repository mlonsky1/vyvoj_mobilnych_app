<?php
session_start();
include ("config.php");
include ("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // príprava dopytu na overenie uživateľa na základe username
    $stmt = $conn->prepare("SELECT id, password_hash FROM users WHERE username = ?");
    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // kontrola či username existuje
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password_hash);
            $stmt->fetch();

            // kontrola hesla
            if (password_verify($password, $password_hash)) {
                // ak heslo je správne, spustenie relácie
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
                header("Location: index.php?menu=4"); 
                exit();
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }

        $stmt->close();
    } else {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }
}

//html časť - login stránka
include("html/login_layout.php")
?>



