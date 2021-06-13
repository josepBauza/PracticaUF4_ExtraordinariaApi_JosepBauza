<?php


include 'DBconn.php';

class Clients Extends DBconn{

  function getClients(){
    $result = $this->connect()->query('SELECT * FROM clients');

    return $result;
  }
}
?>