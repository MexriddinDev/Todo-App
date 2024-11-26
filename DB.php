<?php

$servername = "localhost";
$username = "root";
$password = "0226";

try{
    $conn = new PDO("mysql:host=$servername;dbname=db1", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return "Connected successfully";

}
catch(PDOException $e){
    echo "connection failed: " . $e->getMessage();
}
?>
//class DB
//{
//
//
//
//    public $host = "localhost";
//    public $username = "root";
//    public $password = "0226";
//    public $db_name = "Todo_app";
//    public $conn;
//
//    public function __construct($conn)
//    {
//        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
//    }
//
//
//
//
//}