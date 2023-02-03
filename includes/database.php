<?php

try {
    $db = new PDO("mysql:dbname=demo2;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données";
}