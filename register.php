<?php
  session_start();
  require("./functions/user_controller.php");
  require("./functions/connect.php");
  $userController = new UserController($db);
  if(isset($_POST["name"])){
    $userController->register($_POST);
  }
  require("./view/register.phtml");
?>