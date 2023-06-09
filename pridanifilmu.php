<?php
  require ("./functions/add.php");
  require ("./functions/connect.php");
  if (isset($_POST["name"])) {
    if (isset($_POST["category"]) && $_POST["category"] == "movie") $x->add($_POST, "movie_gallery");
    else if (isset($_POST["category"]) && $_POST["category"] == "tvseries") $x->add($_POST, "tvseries_gallery");
  }

  require ("./view/pridanifilmu.phtml");
?>