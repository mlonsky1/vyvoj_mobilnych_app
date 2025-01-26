<?php
include("config.php");

$var = mysqli_connect("$servername", "$username", "$password", "$dbname") or die("connect error");
          $sort_option = "";
          $sort_column = "";

          if (isset($_GET['zoradenie'])) {
              if ($_GET['zoradenie'] == "cena_vzostupne") {
                  $sort_option = "ASC";
                  $sort_column = "cena";
              } elseif ($_GET['zoradenie'] == "cena_zostupne") {
                  $sort_option = "DESC";
                  $sort_column = "cena";
              } elseif ($_GET['zoradenie'] == "nazov_A-Z") {
                  $sort_option = "ASC";
                  $sort_column = "nazov";
              } elseif ($_GET['zoradenie'] == "nazov_Z-A") {
                  $sort_option = "DESC";
                  $sort_column = "nazov";
              } elseif ($_GET['zoradenie'] == "vyrobca_A-Z") {
                  $sort_option = "ASC";
                  $sort_column = "vyrobca";
              } elseif ($_GET['zoradenie'] == "vyrobca_Z-A") {
                  $sort_option = "DESC";
                  $sort_column = "vyrobca";
              }
          }

          // vykonanie dopytu s vybraným spôsobom zoradenia
          $sql = "SELECT id, nazov, vyrobca, kusov, cena FROM ntovar";
          if ($sort_column) {
              $sql .= " ORDER BY $sort_column $sort_option";
          }

          $result = mysqli_query($var, $sql) or exit("chybny dotaz");

// generovanie riadka pre každý záznam
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $nazov = $row['nazov'];
    $vyrobca = $row['vyrobca'];
    $cena = $row['cena'];
    $kusov = $row['kusov'];
    echo "<tr>
            <td>".$id."</td>
            <td>".$nazov."</td> 
            <td>".$cena."</td>
            <td>".$vyrobca."</td>
            <td>".$kusov."</td>
            <td><a class='btn btn-primary' href='index.php?menu=6&e=".$id."'>upraviť</a></td>
            <td><a class='btn btn-danger' data-id='".$id."' href='zmazanietov.php?k=".$id."'>x</a></td>
          </tr>"; 
}
?>