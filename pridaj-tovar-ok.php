<?php
include("config.php");

$nazov = $_POST["nazov"];
$vyrobca = $_POST["vyrobca"];
$kusov = $_POST["kusov"];
$cena = $_POST["cena"];

include("db_connect.php");

// Získanie časovej známky
$timestamp = time();

// Generovanie ID pomocou aktuálnej časovej známky
$id = date('YmdHis', $timestamp);

// Príprava SQL príkazu na vloženie
$sql = "INSERT INTO ntovar (id, nazov, vyrobca, kusov, cena) VALUES (?, ?, ?, ?, ?)";

// Pripravenie príkazu
$stmt = $conn->prepare($sql);

// Kontrola, či je príkaz pripravený
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Viazanie parametrov k pripravenému príkazu
$stmt->bind_param("sssii", $id, $nazov, $vyrobca, $kusov, $cena);

// Vykonanie príkazu a presmerovanie na východiskovú stránku
if ($stmt->execute()) {
    echo "Záznam bol na uzle 1 zapísaný do db";
    header('Location: index.php?menu=4');
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Zatvorenie príkazu a pripojenia
$stmt->close();
$conn->close();
?>