<?php

include './fonctions/index.php';


// ------------------------------- PDO -------------------------------

class Database{
    public $connexion;

    public function __construct()
    {
        try{
            $this->connexion = new PDO('mysql:host=mariadb;dbname=blog', 'root', 'root',
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
           // echo 'Connexion OK';
        } catch (PDOException $e){
            exit('Erreur de connexion à la base de données : ' . $e);
        }
    }

    public function query($query,$param =[])
    {
        $statement = $this->connexion->prepare($query);
        $statement->execute($param);
        return $statement;
    }

    //$articles = $connection->query('SELECT * from post')->fetchAll(PDO::FETCH_ASSOC);
}








