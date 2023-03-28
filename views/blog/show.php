<marquee><h1 align="center">Page d'un article</h1></marquee>

<h2>
    <?= $params['article']->titre ?>
</h2>
<small><?= $params['article']->createAt ?></small>
<p><?= $params['article']->contenu ?></p>
<br>
<a href="/posts"><button class="btn btn-secondary">Retour</button></a>
