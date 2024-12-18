<?php

class Database
{
    private $pdo;

    public function __construct()
    {
        try {
            $config = include __DIR__ . '/../config.php';
            $dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']}";
            $this->pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion réussie à la base de données !";
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
}

new Database();
