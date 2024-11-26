<?php
require'Database.php';


$title = $_POST['title'];

$status = $_POST['status'];

$due_date = $_POST['due_date'];

$query = "INSERT INTO todos (title,status,due_date)  VALUES (:title, :status, :due_date)";

$db = new Database();
$stmt = $db->conn->prepare($query);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':due_date', $due_date);
$stmt->execute();





?>