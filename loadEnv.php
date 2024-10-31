<?php
// script qui charge le fichier env dans les variables d'environnement de l'appli PHP
function loadEnv($path)
{
    if (!file_exists($path)) {
        throw new Exception("Fichier .env introuvable.");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue; // Ignore les commentaires
        }

        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);

        putenv("$name=$value");
    }
}

// Charger les variables de .env
loadEnv(__DIR__ . '/.env');