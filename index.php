<?php
    require 'header.php';
    require 'bdd.php';

    $bdd = connexion();
    $artworks = $bdd->query('SELECT * FROM oeuvres');

?>
<div id="liste-oeuvres">
    <?php foreach($artworks as $artwork): ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?= $artwork['id'] ?>">
                <img src="<?= $artwork['src_image'] ?>" alt="<?= $artwork['title'] ?>">
                <h2><?= $artwork['title'] ?></h2>
                <p class="description"><?= $artwork['artist'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>
<?php require 'footer.php'; ?>
