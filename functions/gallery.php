<?php
function getData($tabulka, $db) {
  $SQL = "SELECT * FROM $tabulka";
  $result = mysqli_query($db, $SQL);
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $data;
}
?>