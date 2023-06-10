<?php
require ("./functions/gallery.php");
require ("./functions/connect.php");
require ("./functions/delete.php");
$movies = getData("movie_gallery", $PDO);
$tvseries = getData("tvseries_gallery", $PDO);
if(isset($_GET["delete"])){
  delete($_GET["delete"], $_GET["category"], $PDO);
}
require ("./view/administrace.phtml");
?>