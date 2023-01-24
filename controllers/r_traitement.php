<?php

if (empty($_POST['name'])) {
    $_SESSION['error_name'] = "Le nom est obligatoire";
    header("Location: /register");
}