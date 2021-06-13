<?php

class DBconn {

    private $host;
    private $dbname; 
    private $user; 
    private $password; 
    public $conn; 

    public function __DBaccess(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "root";
        $this->db_name = "m06_uf4_extraordinarioa";
    }

    public function connect(){
        $this->conn = null;
        
        try{
            $this->conn = PDD('mysqli:.host='.$this->host.';db_name='.$this->db_name,$this->user,$this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'Connection failed: '.$e->getMessage();
        }
        return $this->conn;
        
    }

}

?>