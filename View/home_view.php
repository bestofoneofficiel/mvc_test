<h1 class="text-center">Page d'accueil</h1>
<p class="text-center"><i>Ma page d'accueil créé en MVC</i></p>
<p class="text-center"><a href="../mvc_test/index.php?controller=item&action=insertForm" class="btn btn-primary">Ajouter un item</a></p><?php

foreach ($items as $item) {
	require 'Parts/item.php' ;
}?>


