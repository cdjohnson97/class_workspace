<?php
class Database {
    private $host = "localhost";
    private $db = "bibliotheque";
    private $user = "root";
    private $password = "";
    private $charset = "utf8mb4";


    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        //connexion avec la BD
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->password, $option);
        } catch (PDOException $e) {
            echo "Cannot connect to the database";
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }


    }
}
?>

