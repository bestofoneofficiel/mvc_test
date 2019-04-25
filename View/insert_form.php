<h1 class="text-center mb-3">Ajout d'un nouvel item</h1>

<form method="post" action="index.php?controller=item&action=insertItem">
    <div class="form-group">
        <label for="input1">Titre</label>
        <input name="title" type="text" class="form-control" id="input1" placeholder="Ecrivez ici le titre de votre item ...">
    </div>

    <div class="form-group">
        <label for="textarea1">Texte</label>
        <textarea name="content" class="form-control" id="textarea1" rows="3" placeholder="Ecrivez ici le texte de votre item ..."></textarea>
    </div>

    <input class="btn btn-primary" type="submit" value="valider">
    <a href="../mvc_test/index.php" class="btn btn-secondary">Annuler</a>
</form>