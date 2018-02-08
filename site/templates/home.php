<? snippet('header') ?>
<main class="home">
    <!-- <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?> -->

    <div class="mygrid">
	    <? foreach($pages->visible()->not('home') as $p): ?>
	    	<div class="grid-item <?php echo $p->formaatbeeldhome() ?>">
				<a href="<?php echo $p->url() ?>" class="thumbnail">
				<?php
				// check if the image exists (although select in the field, the image might have been deleted)
				if($image = $p->beeldhome()->toFile()): ?>
				
				<img src="<?= $image->url() ?>">
				
				<?php endif ?>
				<div class="home-caption">
	            	<h3 class="home-title"><?php echo $p->title() ?></h3>
	        	</div>
				</a>		
			</div>  	
	    <? endforeach ?>

	</div>
	
</main>

<? snippet('footer') ?>


