<? snippet('header') ?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
	    		<h1><?= $page->titlesuffix()->html() ?></h1>
	    	</div>
	    	<div class="col-md-4 textcol">
	    		<?= $page->text()->kirbytext() ?>
	    	</div>
	    	<div class="col-md-6">
	    		<?php
				// check if the image exists (although select in the field, the image might have been deleted)
				if($image = $page->beeldpagina()->toFile()): ?>
				<img src="<?= $image->url() ?>">				
				<?php endif ?>
	    	</div>
	    </div>
	</div>
</main>

<? snippet('footer') ?>
