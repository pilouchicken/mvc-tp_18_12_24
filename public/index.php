<?php
// Démarre la session si besoin
session_start();

// Inclusion de la base de données et du contrôleur
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../app/controllers/TaskController.php';

// Récupération de l'instance de la base de données
$db = Database::getInstance();
$pdo = $db->getConnection();

// Appel du contrôleur
$controller = new TaskController($pdo);
$controller->index();