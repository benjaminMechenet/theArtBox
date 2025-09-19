<?php require 'header.php'; ?>

<?php if(!empty($_GET['error'])){
    if($_GET['error'] === "title"){
        echo '<p>Veuillez renseigner le titre de l\'oeuvre</p>';
    }
    elseif($_GET['error'] === "artist"){
        echo '<p>Veuillez renseigner l\'artiste de l\'oeuvre</p>';
    }
    elseif($_GET['error'] === "image"){
        echo '<p>Veuillez renseigner le lien vers l\'image de l\'oeuvre</p>';
    }
    elseif($_GET['error'] === "description"){
        echo '<p>Veuillez renseigner une description pour l\'oeuvre</p>';
    }
} ?>

<form action="traitement.php" method="POST">
    <div class="champ-formulaire">
        <label for="title">Titre de l'œuvre</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="champ-formulaire">
        <label for="artist">Auteur de l'œuvre</label>
        <input type="text" name="artist" id="artist">
    </div>
    <div class="champ-formulaire">
        <label for="src_image">URL de l'image</label>
        <input type="url" name="src_image" id="src_image">
    </div>
    <div class="champ-formulaire">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <input type="submit" value="Valider" name="submit">
</form>

<?php require 'footer.php'; ?>
