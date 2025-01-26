<?php
include("config.php");
include("db_connect.php");

//získanie id záznamu z URL
$e = $_GET['e'] ?? '';

//dopyt pre získanie záznamu
$sql = "SELECT id, nazov, vyrobca, kusov, cena FROM ntovar WHERE id='$e'";
$result = mysqli_query($conn, $sql) or exit("chybny dotaz");

// kontrola či záznam existuje
$row = mysqli_fetch_assoc($result);
if (!$row) {
    exit("Záznam nebol nájdený.");
}

// extrakcia hodnót záznamu do premenných
$id = $row['id'];
$nazov = $row['nazov'];
$vyrobca = $row['vyrobca'];
$kusov = $row['kusov'];
$cena = $row['cena'];

// html časť - edit formulár
include("html/edit_form.html");
?>
