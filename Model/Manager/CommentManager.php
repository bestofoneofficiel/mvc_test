<?php


class CommentManager extends DbManager
{


	// Méthodes pour SELECTIONNER TOUS les commentaires
	/**
	 * CommentManager constructor.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function selectAll($id_article) {
		$comments = [];
		$req = $this->bdd->prepare('SELECT * FROM commentaire WHERE id_article = ? ORDER BY date_creation');
		$req->execute(array($id_article));
		while ($row = $req->fetch()) {
			$comments[] = new Comment($row['auteur'], $row['date_creation'], $row['contenu']);
		}

		return $comments;
	}
}