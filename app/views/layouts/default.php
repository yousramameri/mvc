<?php /** @var string $content */ ?>
<!-- Layout principal : structure globale du site -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($pageTitle ?? 'Mon site') ?></title>
</head>
<body>

<!-- Navigation principale -->
<nav>
    <a href="index.php">Accueil</a> |
    <a href="index.php?uri=news/allnews">Toutes les news</a> |
    <a href="app/views/page/other.php">Autre page</a>
</nav>

<!-- Contenu dynamique injecté par renderView() -->
<main>
    <?= $content ?>
</main>

<!-- Footer global app/views/news/allnews.php -->
<footer>
    <p>MVC PHP</p>
</footer>

</body>
</html>