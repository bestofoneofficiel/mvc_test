<?php
class CommentController{
	// Afficher le formulaire d'insertion
	public function readComment($id_article) {
		$commentManager = new CommentManager();
		$comments = $commentManager->selectAll($id_article);

		// titre de la page
		$title = count($comments) . ' commentaire'; if(count($comments) > 1) $title .= 's';

		require 'View/comments_view.php';
	}
}
