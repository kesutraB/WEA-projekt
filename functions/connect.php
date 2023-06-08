<?php
  class DBConnect {

    private $DBserver;
    private $DBuser;
    private $DBpassword;
    private $DBname;
    public $DB;

    public function __construct($server, $user, $password, $name)
    {
      $this->DBserver = $server;
      $this->DBuser = $user;
      $this->DBpassword = $password;
      $this->DBname = $name;
    }

    public function connect()
    {
      $this->DB = mysqli_connect($this->DBserver, $this->DBuser, $this->DBpassword, $this->DBname);
      mysqli_set_charset($this->DB, "utf8");
    }
  }

  $db = new DBConnect("localhost", "root", "", "i2c_zwa");
  $db->connect();
?>