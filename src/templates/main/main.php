<?php foreach ($articles as $article): ?>
<div class="article-link">
    <h2><?= $article->getName() ?></h2>
    <p><?= $article->getText() ?></p>
    <a href="./articles/<?= $article->getId() ?>"><span class="visually-hidden">To article</span></a>
</div>
<?php endforeach; ?>