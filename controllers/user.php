<?php
require_once('../db_connect.php');

class User
{
    private $conn;

    public function __construct()
    {
        $dateBase = new Database();
        $this->conn = $dateBase->pdo;
    }

    public function getUserById($user_id)
    {

        $sql = "SELECT * FROM utilisateur WHERE id_utilisateur = :user_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Other user model methods...

    function getAllUsers()
    {

        $sql = "SELECT * FROM utilisateur";
        $statement = $this->conn->prepare($sql);
        $statement->execute();

        //retrieve all users from the DB
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}


