<?php
require_once('../db_connect.php');

class User
{


    public function getUserById($user_id)
    {
        global $conn; // Assuming $conn is accessible in this scope

        $sql = "SELECT * FROM utilisateur WHERE id_utilisateur = :user_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // Other user model methods...

    function getAllUsers()
    {
        global $conn;

        $sql = "SELECT * FROM utilisateur";
        $statement = $conn->prepare($sql);
        $statement->execute();

        //retrieve all users from the DB
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
}


