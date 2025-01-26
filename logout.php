<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php"); // presmerovanie na login stránku po odhlásení
exit();
?>
