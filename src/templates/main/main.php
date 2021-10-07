<?php foreach ($articles as $article): ?>
<a href="./articles/<?= $article->getId() ?>">
<div>
    <h2><?= $article->getName() ?></h2>
    <p><?= $article->getText() ?></p>
</div>
</a>
<hr>
<?php endforeach; ?>