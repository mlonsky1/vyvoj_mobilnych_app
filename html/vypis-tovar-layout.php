<?php
session_start();
?>

<!doctype html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/js/delete_alert.js"></script>
  </head>
  <body style="background: #eeeeee">
    <div class="col-4">
        <div class="input-group m-3" style="box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1)">
            <input type="text" id="search" class="form-control" placeholder="Hladať" autocomplete="off">
        </div>
    </div>
    <form id="sortForm" action="" method="GET">
      <div class="col-4">
        <div class="input-group m-3" style="box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1)">
          <select name="zoradenie" id="zoradenie" class="form-control">
            <option value="">zoradiť podľa</option>
            <option value="cena_vzostupne" <?php if(isset($_GET['zoradenie']) && $_GET['zoradenie'] == "cena_vzostupne" ){echo "selected";} ?> >cena vzostupne</option>
            <option value="cena_zostupne" <?php if(isset($_GET['zoradenie']) && $_GET['zoradenie'] == "cena_zostupne" ){echo "selected" ; } ?> >cena zostupne</option>
            <option value="nazov_A-Z" <?php if(isset($_GET['zoradenie']) && $_GET['zoradenie'] == "nazov_A-Z" ){echo "selected";} ?> >nazov A-Z</option>
            <option value="nazov_Z-A" <?php if(isset($_GET['zoradenie']) && $_GET['zoradenie'] == "nazov_Z-A" ){echo "selected" ; } ?> >nazov Z-A</option>
            <option value="vyrobca_A-Z" <?php if(isset($_GET['zoradenie']) && $_GET['zoradenie'] == "vyrobca_A-Z" ){echo "selected";} ?> >vyrobca A-Z</option>
            <option value="vyrobca_Z-A" <?php if(isset($_GET['zoradenie']) && $_GET['zoradenie'] == "vyrobca_Z-A" ){echo "selected" ; } ?> >vyrobca Z-A</option>
          </select>
          <button type="button" class="input-group-text btn btn-primary" id="sortButton">zoradiť</button>
        </div>
      </div>
    </form>
    <div class="table-container">
      <div id="table-data">
        <table class="table" id="data-table">
          <thead class="thead-dark">
            <tr>
              <th>Id</th>
              <th>Názov</th>
              <th>Cena</th>
              <th>Výrobca</th>
              <th>Kusov</th>
              <th>Upraviť</th>
              <th>Vymazať</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include("vypis_tovar.php");
            ?>
          </tbody>
        </table>
      </div>
    </div>
      <script src="/js/sort_ajax.js"></script>
  </body>
</html>
