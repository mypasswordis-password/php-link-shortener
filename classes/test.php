<?php

class shortener {
  public $link;
  public $hash1;
  private $db;
  
  public function __construct($link, $hash1, $db) {
    $this->link = $link;
    $this->hash1 = $hash1;
    $this->db = $db;
    $db->exec("INSERT INTO links (hash, link) VALUES ('{$hash1}', '{$link}')");
  }
  public function __destruct() {
    $this->db->close(); // Close the database connection
    }
  
}

?>