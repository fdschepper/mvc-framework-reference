<?php
  class Country {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getUsers() {
      $this->db->query("SELECT * FROM `richestpeople`;");

      $result = $this->db->resultSet();

      return $result;
    }
  }
