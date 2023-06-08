<?php
class AddMovie
{
  private $DB;
  public function __construct($db)
  {
    $this->DB = $db;
  }

  public function addMovie($info)
  {
    $SQL = "INSERT INTO movie_gallery (name, img) VALUES ('{$info["name"]}', '{$info["obr"]}'";
  }
}
?>