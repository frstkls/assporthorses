<? snippet('header') ?>

<main class="contact">
	<div class="container">
	    <h1><?= $page->title()->html() ?></h1>
	    <?= $page->text()->kirbytext() ?>
	    <hr />
	    <? snippet('contactform') ?>
	</div>
</main>

<? snippet('footer') ?>
