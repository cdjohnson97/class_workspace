<?php
require_once('../db_connect.php');
class Livre
{
    private $conn;

    public function __construct()
    {
        $dataBase = new Database();
        $this->conn = $dataBase->pdo;
    }

    public function getAllBooks()
    {

        $sql = "SELECT * FROM livre";
        $requette = $this->conn->prepare($sql);
        $requette->execute();

        //retrieve all the book
        $books = $requette->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

    public function getBookById($id)
    {
        

    }

}