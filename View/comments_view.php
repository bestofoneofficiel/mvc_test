<div class="m-4 py-3">
	<h3><?=$title?></h3>
	<hr />
</div>
<?php
foreach ($comments as $comment) {
	require 'Parts/comment.php' ;
}?>


