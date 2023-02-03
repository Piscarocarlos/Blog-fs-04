<?php
require_once "../includes/database.php";

extract($_POST);

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $query = $db->prepare("INSERT INTO users(name, email, password) VALUES(:name, :email, :password)");

    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
} else {
    echo "Adresse e-mail incorrecte";
}



// // if($re)