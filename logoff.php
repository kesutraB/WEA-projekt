<?php
  session_start();
  require ("./functions/user_controller.php");
  require ("./functions/connect.php");
  $userController = new UserController($db);
  $userController->logoff();
?>