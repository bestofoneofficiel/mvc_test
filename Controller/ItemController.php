<?php
class ItemController{
	// LECTURE
		// Afficher le formulaire d'insertion
		public function readItem($id) {
			$itemManager = new ItemManager();
			$item = $itemManager->selectOne($id);

			require 'View/Parts/item.php';
		}


	// INSERTION
		// Afficher le formulaire d'insertion
	    public function insertForm() {
	        require 'View/insert_form.php';
	    }

	    // Insertion d'un item en bdd
	    public function insertItem() {
	        $item = new Item(null, $_POST['title'], $_POST['content'], null);
	        $itemManager = new ItemManager();
	        $itemManager->insertItem($item);
	        header('Location: /mvc_test/index.php');
	    }


	// MODIFICATION
		// Afficher le formulaire de modification
		public function updateForm($id) {
			$itemManager = new ItemManager();
			$item = $itemManager->selectOne($id);

			require 'View/update_form.php';
		}

		// Modifier un article en bdd
		public function updateItem($id) {
			$itemManager = new ItemManager();
			$item = $itemManager->selectOne($id);
			$item = new Item($id, $_POST['title'], $_POST['content'], $item->getCreationDate());
			$itemManager->updateItem($item);

			header('Location: /mvc_test/index.php');
		}


	// SUPPRESSION
	    // Afficher le formulaire de confirmation
		public function deleteForm() {
			require 'View/delete_form.php';
		}

		// Supprimer un item
	    public function deleteItem($id) {
	        $itemManager = new ItemManager();
	        $itemManager->deleteItem($id);
	        header('Location: /mvc_test/index.php');
	    }
}
