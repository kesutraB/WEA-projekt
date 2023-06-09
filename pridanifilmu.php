<?php

  require ("./functions/add.php");
  require ("./functions/connect.php");
  if (isset($_POST["name"])) {
    if (isset($_POST["category"]) && $_POST["category"] == "movie"){
    add($_POST,$_FILES, "movie_gallery",$PDO);
      
    }
    }
    else if (isset($_POST["category"]) && $_POST["category"] == "tvseries") add($_POST,$_FILES, "tvseries_gallery",$PDO);
  require ("./view/pridanifilmu.phtml");
?>