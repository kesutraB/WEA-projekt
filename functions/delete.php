<?php
function delete($info, $tabulka, $db) {
  $SQL = "DELETE FROM $tabulka WHERE id = '{$info}'";
  mysqli_query($db, $SQL);
  header("location: administrace.php");
}
?>