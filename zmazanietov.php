<?php

include ("config.php");

// Vytvorenie pripojenia k databáze
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola pripojenia k  databáze
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

$id = $_GET['k'];
$sql = "DELETE FROM ntovar WHERE id='$id' ";
$stmt = $conn->prepare($sql);

// Kontrola, či je statement správne pripravený
if ($stmt === false) {
    die("Local prepare failed: " . $conn->error);
}

// Vykonanie príkazu v databáze
if (!$stmt->execute()) {
    echo "execute failed: " . $stmt->error;
}

// Zatvorenie príkazu a pripojenia k databáze
$stmt->close();
$conn->close();

header ('Location: index.php?menu=4');
?>