<?php

require 'bdd.php';

$postData = $_POST;

if(empty($postData['title']))
    {
        header('Location: ajouter.php?error=title');
    }
elseif(empty($postData['artist']))
    {
        header('Location: ajouter.php?error=artist');
    }
elseif(empty($postData['description']) || strlen($postData['description']) < 3)
    {
        header('Location: ajouter.php?error=description');
    }
elseif(empty($postData['src_image']) || !filter_var($postData['src_image'], FILTER_VALIDATE_URL))
    {
        header('Location: ajouter.php?error=image');
    }
else{
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $artist = htmlspecialchars($_POST['artist']);
    $src_image = htmlspecialchars($_POST['src_image']);

    $bdd = connexion();
    
    $request = $bdd->prepare('INSERT INTO oeuvres (title, description, artist, src_image) VALUES (?, ?, ?, ?)');
    $request->execute([$title, $description, $artist, $src_image]);
    header('Location: oeuvre.php?id='. $bdd->lastInsertId());
}

