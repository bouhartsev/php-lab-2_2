<?php foreach ($articles as $article): ?>
    <h2><?= $article->getName() ?></h2>
    <p><?= $article->getText() ?></p>
    <hr>
<?php endforeach; ?>