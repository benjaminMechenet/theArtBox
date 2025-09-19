<?php
    require 'header.php';
    require 'bdd.php';

    $bdd = connexion();
    
    $request = $bdd->prepare('SELECT * FROM oeuvres WHERE `id` = ?');
    $request->execute([$_GET['id']]);
    $artwork = $request->fetch();
    
    if(empty($_GET['id']) || !$artwork) {
        header('Location: index.php');
    }  
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= $artwork['src_image'] ?>" alt="<?= $artwork['title'] ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $artwork['title'] ?></h1>
        <p class="description"><?= $artwork['artist'] ?></p>
        <p class="description-complete">
             <?= $artwork['description'] ?>
        </p>
    </div>
</article>

<?php require 'footer.php'; ?>
