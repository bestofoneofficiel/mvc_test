<div class="news border rounded m-4 p-3">
    <h2 class="text-primary"><a href="/mvc_test/index.php?controller=item&action=readItem&id=<?=$item->getId()?>"><?=$item->getTitle()?></a></h2>
    <p class="text-secondary"><i>Crée le <?=$item->getCreationDate()?></i></p>

    <p class="bg-light rounded p-3">
        <?=nl2br(htmlspecialchars($item->getContent()));?>
    </p>
    <p class="text-right">
        <a href="/mvc_test/index.php?controller=comment&action=readComments&id_article=<?=$item->getId()?>" class="btn btn-primary">Voir les commentaires</a>
        <a href="/mvc_test/index.php?controller=item&action=updateForm&id=<?=$item->getId()?>" class="btn btn-info">Modifier</a>
        <a href="/mvc_test/index.php?controller=item&action=deleteForm&id=<?=$item->getId()?>" class="btn btn-danger">Supprimer</a>
    </p>
</div>