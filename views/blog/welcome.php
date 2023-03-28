<h1 align="center">Page de mes articles</h1>
<?php foreach($params['articles'] as $article): ?>

    

<class class="card body">
    <h2><?= $article->titre ?></h2>
    <small>Publié le<?= $article->getcreateAt() ?></small>
    <p><?= $article->getExcerpt() ?></p>
    <p><?= $article->getButton($article->id) ?></p>
   
</class>
<?php endforeach ?>