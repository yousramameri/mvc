<?php $news = $GLOBALS['news'] ?? $news ?? []; ?>

<h1>Liste des news</h1>

<?php if (!empty($news)): ?>
    <?php foreach ($news as $item): ?>
        <article>
            <h2><?= htmlspecialchars($item->news_title) ?></h2>
            <p><?= htmlspecialchars($item->news_content) ?></p>
            <small><?= french_date($item->news_date) ?></small>
        </article>
        <hr>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucune donnée</p>
<?php endif; ?>

<p><a href="index.php">&laquo; Retour</a></p>


<p><a href="../../../index.php">&laquo; Retour</a></p>