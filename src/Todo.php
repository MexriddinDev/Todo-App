<?php
require "DB.php";

class Todo {
    public $pdo;
    public function __construct () {

        $db = new DB();
        $this->pdo = $db->conn;
    }
    public function store (string $title, string $dueDate) {

        $query = "INSERT INTO todos(title, status, due_date, created_at, update_at) 
                VALUES (:title, 'pending', :due_date, NOW(), NOW())
        ";
        $this->pdo->prepare($query)->execute([
            ":title" => $title,
            ":due_date" => $dueDate
        ]);
    }
    public function getAllTodos () {
        $query = "SELECT * FROM todos";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll();
    }

    public function complete (int $id): bool {
        $query = "UPDATE todos set status='completed', update_at=NOW() where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }
    public function in_progress(int $id): bool{
        $query="Update todos set status='in_progress', update_at=NOW() where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }
    public function pending (int $id): bool{
        $query="Update todos set status='pending', update_at=NOW() where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function destroy (int $id): bool{
        $query="Delete from todos WHERE id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function getTodo(int $id)
    {
        $query="SELECT * from todos where id=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ":id" => $id
        ]);
        return $stmt->fetch();
    }
}