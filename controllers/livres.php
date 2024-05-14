<?php
require_once('../db_connect.php');
class Livre
{
    public function getAllBooks()
    {
        global $conn;
        $sql = "SELECT * FROM livre";
        $requette = $conn->prepare($sql);
        $requette->execute();

        //retrieve all the book
        $books = $requette->fetchAll(PDO::FETCH_ASSOC);
        return $books;
    }

}