<?php
session_start();

// kontrola či je uživateľ prihlásený
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not authenticated
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
  <link rel="stylesheet" href="/css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  </head>
  <body>
    <div class="row" style="height:100%">
      <div class="col-2">
        <?php include('sidebar.php'); ?>
      </div>
      <div class="col-10">
        <?php
        // získanie parametra menu
        $m = $_GET["menu"] ?? 4; // Default hodnota menu 4

        // kontrola parametra $m
        if (!in_array($m, range(1, 6))) {
            $m = 4; 
        }

        // zmena hodnoty parametra na základe zvoleného menu
        switch ($m) {
            case 1:
                include("html/pridaj-tovar.php");
                break;
            case 2:
                include("profile.php");
                break;
            case 3:
                include("pridaj-tovar-ok.php");
                break;
            case 4:
                include("html/vypis-tovar-layout.php");
                break;
            case 5:
                include("editovany-tovar-ok.php");
                break;
            case 6:
                include("edit.php");
                break;
            default:
                include("login.php");
                break;
        }
        ?>
      </div>
    </div>
  </body>
</html>