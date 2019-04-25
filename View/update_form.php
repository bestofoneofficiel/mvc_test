<h1 class="text-center mb-3">Mise à jour d'un item</h1>

<form method="post" action="index.php?controller=item&action=updateItem&id=<?=$item->getId()?>">
    <div class="form-group">
        <label for="input1">Titre</label>
        <input name="title" type="text" value="<?=$item->getTitle()?>" class="form-control" id="input1" placeholder="Ecrivez ici le titre de votre article ...">
    </div>

    <div class="form-group">
        <label for="textarea1">Texte</label>
        <textarea name="content" class="form-control" id="textarea1" rows="3" placeholder="Ecrivez ici le texte de votre message ..."><?=$item->getContent()?></textarea>
    </div>

    <input class="btn btn-primary" type="submit" value="valider">
    <a href="../mvc_test/index.php" class="btn btn-secondary">Revenir en arrière</a>
</form>