<?php
class Database
{
    private $servername = "localhost";
    private $username = "Sanidhya";
    private $password = "123@123#";
    private $dbname = "attendance_db";
    public  $conn=null;
    
    public  function __construct() {
        try {
           $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}

?>
