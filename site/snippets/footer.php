            <footer>
                <!-- <?= $site->footer()->kirbytext() ?> -->
                <a target="_blank" href="https://twitter.com/abdelsaid3">instagram</a>
                <a target="_blank" href="https://www.facebook.com/abdel.said.773">facebook</a>
                <a target="_blank" href="<?= url() ?>/contact">contact</a>
            </footer>
        <?= js('assets/js/vendor/jquery.min.js') ?>
        <?= js('assets/js/isotope.pkgd.min.js') ?>      
        <?= js('assets/js/packery-mode.pkgd.min.js') ?>      
        <?= js('assets/js/vendor/plugins.min.js') ?>      
        <?= js('assets/js/imagesloaded.pkgd.min.js') ?>
        <?= js('assets/js/jquery-imagefill.js') ?>
        <?= js('assets/js/onload.js') ?>
		
        <script>
		$('.mygrid').isotope({
		layoutMode: 'packery',
		itemSelector: '.grid-item',
		packery: {
		gutter: 0
		}
		});
		</script>
		<script>
			$('.grid-item').imagefill({throttle:1000/60})
		</script>
    </body>
</html>
