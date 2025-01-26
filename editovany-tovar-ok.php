<?php
include ("config.php");

$id = $_GET['id'];
$nazov = $_POST["nazov"]; 
$vyrobca = $_POST["vyrobca"];
$kusov = $_POST["kusov"]; 
$cena = $_POST["cena"]; 

include ("db_connect.php");

//príprava sql dopytu
$sql = "UPDATE `ntovar` 
SET 
`nazov`= ?,
`vyrobca`= ?,
`kusov`= ?,
`cena`= ?
WHERE id= ?";

// Pripravenie príkazu
$stmt = $conn->prepare($sql);

// Kontrola, či je príkaz pripravený
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Viazanie parametrov k pripravenému príkazu
$stmt->bind_param("ssiii", $nazov, $vyrobca, $kusov, $cena, $id);

// Vykonanie príkazu
if ($stmt->execute()) {
    header('Location: index.php?menu=4');

} else {
    echo "Error: " . $stmt->error;
}

// Zatvorenie príkazu a pripojenia
$stmt->close();
$conn->close();
?>


