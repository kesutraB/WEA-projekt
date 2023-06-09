<?php
function add($info, $tabulka, $db)
{
  $SQL = "INSERT INTO $tabulka (name, img) VALUES ('{$info["name"]}', '{$info["obr"]}'";
}
?>