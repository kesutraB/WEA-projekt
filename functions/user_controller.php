<?php
class UserController
{
  private $DB;
  public function __construct($db)
  {
    $this->DB = $db;
  }
  public function login($info)
  {
    $hashedpass = sha1($info["password"]);
    $SQL = "SELECT * FROM users WHERE name = '{$info["name"]}'
              AND password = '$hashedpass'";
    $user = mysqli_query($this->DB->DB, $SQL);
    $_SESSION["user"] = mysqli_fetch_assoc($user);
    if (isset($_SESSION["user"])) {
      header("location: index.php");
    }
  }

  public function register($info)
  {
    $hashedpass = sha1($info["password"]);
    $SQL = "INSERT INTO users (name, email, password) VALUES ('{$info["name"]}', '{$info["email"]}', '{$hashedpass}')";
    mysqli_query($this->DB->DB, $SQL);
    header("location: login.php");
  }

  public function logoff()
  {
    unset($_SESSION["user"]);
    header("location: index.php");
    exit;
  }
}
?>