<?php
declare(strict_types = 1);
if(!defined('ROOT')) exit('Nope !');

// Autoload : charge automatiquement toutes les classes
spl_autoload_register(function(string $className): void {
    // Convertit le namespace en chemin de fichier
    $path = ROOT . SEP . str_replace('\\', SEP, $className) . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

// Fonctions utilitaires (pas une classe, donc require manuel)
require ROOT . SEP . 'app' . SEP . 'utils.php';