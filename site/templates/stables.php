<? snippet('header') ?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8"><? snippet('slider') ?></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2">
	    		<h1><?= $page->titlesuffix()->html() ?></h1>
	    	</div>
	    	<div class="col-md-8 textcol">
	    		<?= $page->text()->kirbytext() ?>
	    	</div>
	    	<div class="col-md-2">
	    		
	    	</div>
	    </div>
	</div>
</main>

<? snippet('footer') ?>
