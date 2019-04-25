<?php
class ItemManager extends DbManager {
	// Recupereration de la CONNEXION à la bdd
    public function __construct() {
        parent::__construct();
    }

    // Méthodes pour SELECTIONNER TOUS les items
    public function selectAll() {
        $items = [];
        $sql =  'SELECT * FROM article ORDER BY date_creation';
        foreach  ($this->bdd->query($sql) as $row) {
            $items[] = new Item($row['id'], $row['titre'], $row['contenu'], $row['date_creation']);
        }

        return $items;
    }

    // Méthodes pour SELECTIONNER UN seul item
    public function selectOne($id) {
	    $req = $this->bdd->prepare('SELECT * FROM article WHERE id = ?');
	    $req->execute(array($id));
	    $res = $req->fetch();
	    $item = new Item($res['id'], $res['titre'], $res['contenu'], $res['date_creation']);

	    return $item;
    }

    // Méthode pour INSERER un item en bdd
    public function insertItem(Item $item) {
        $req = $this->bdd->prepare('INSERT INTO article (titre, contenu, date_creation) VALUES (?, ?, ?)');
        $req->execute(array($item->getTitle(), $item->getContent(), $item->getCreationDate()));
        $item->setId($this->bdd->lastInsertId());
    }

    // Méthode pour MODIFIER un item en bdd
    public function updateItem(Item $item) {
	    $req = $this->bdd->prepare('UPDATE article SET titre = ? , contenu = ?, date_creation = ? WHERE id = ?');
	    $req->execute(array($item->getTitle(), $item->getContent(), $item->getCreationDate(), $item->getId()));
    }

    // Méthode pour SUPPRIMER un item en bdd
    public function deleteItem($id) {
        $req = $this->bdd->prepare('DELETE FROM article where id = ?');
        $req->execute(array($id));
    }
}
?>