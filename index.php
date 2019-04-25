<?php
require 'include.php';
require 'View/Parts/page_top.php';

// Se le controleur et l'action sont présent
if(!empty($_GET['controller']) && !empty($_GET['action'])) {

    // Si on demande un article
    if ($_GET['controller'] === 'item') {
	    // LECTURE
		    // Afficher un seul item
		    if ($_GET['action'] === 'readItem' && !empty($_GET['id'])) {
			    $itemController = new ItemController();
			    $itemController->readItem($_GET['id']);
		    }
	    // AJOUT
	        // Formulaire d'ajout
		    else if ($_GET['action'] === 'insertForm') {
			    $itemController = new ItemController();
			    $itemController->insertForm();
		    }
		    // Insertion en bdd
		    else if ($_GET['action'] === 'insertItem') {
			    $itemController = new ItemController();
			    $itemController->insertItem();
		    }
	    // MODIFICATION
		    // Formulaire de modification
		    else if ($_GET['action'] === 'updateForm' && !empty($_GET['id'])) {
			    $itemController = new ItemController();
			    $itemController->updateForm($_GET['id']);
		    }
		    // Modification en bdd
		    else if ($_GET['action'] === 'updateItem' && !empty($_GET['id'])) {
			    $itemController = new ItemController();
			    $itemController->updateItem($_GET['id']);
		    }
	    // SUPPRESSION
		    // Formulaire de confirmation
		    else if ($_GET['action'] === 'deleteForm' && !empty($_GET['id'])) {
			    $itemController = new ItemController();
			    $itemController->deleteForm($_GET['id']);
		    }
		    // Suppression en bdd
		    else if ($_GET['action'] === 'deleteItem' && !empty($_GET['id'])) {
			    $itemController = new ItemController();
			    $itemController->deleteItem($_GET['id']);
		    }
	    // ERREUR
		    // Sinon, action mal formulé ou non demandé, on affiche une erreur
		    else {
			    throw new Exception('La page demandée n\'existe pas', 404);
		    }
    }
    // Si on a demandé les commentaires
    else if ($_GET['controller'] === 'comment') {
		    // Afficher les commentaires
		    if ($_GET['action'] === 'readComments' && !empty($_GET['id_article'])) {
			    $commentController = new CommentController();
			    $commentController->readComment($_GET['id_article']);
		    }
		    // Sinon, action mal formulé ou non demandé, on affiche une erreur
		    else {
			    throw new Exception('La page demandée n\'existe pas', 404);
		    }
    }
    // Sinon, on a pas demandé un article, on affiche la page d'acceuil
    else {
	    $itemController = new DefaultController();
	    $itemController->home();
    }
}
// Sinon, le controleur et/ou l'action sont absent, on affiche la page d'acceuil
else {
	$defaultController = new DefaultController();
	$defaultController->home();
}

require 'View/Parts/page_bottom.php';
?>