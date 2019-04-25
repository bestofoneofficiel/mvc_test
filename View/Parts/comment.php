<div class="news border rounded m-4 p-3">
    <h2 class="text-primary"><?=$comment->getAuthor()?></h2>
    <p class="text-secondary"><i>Crée le <?=$comment->getCreationDate()?></i></p>

    <p class="bg-light rounded p-3">
		<?=nl2br(htmlspecialchars($comment->getContent()));?>
    </p>
</div>