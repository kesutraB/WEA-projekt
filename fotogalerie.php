<?php
require ("./functions/gallery.php");
require ("./functions/connect.php");
$movies = getData("movie_gallery", $PDO);
$tvseries = getData("tvseries_gallery", $PDO);
require ("./view/fotogalerie.phtml");
?>