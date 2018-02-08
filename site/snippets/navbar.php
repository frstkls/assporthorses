<nav class="navbar">
    <div class="container-fluid">
      <!-- <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

      </div> -->

      <a class="navbar-brand pull-right navbar-right" href="<?= url() ?>">
        <img src="<?php echo kirby()->urls()->assets() . '/img/logo.png' ?>">
      </a>
      <div id="myNav" class="overlay">
            <ul class="nav nav-justified">
                <? foreach($pages->visible() as $p): ?>
                    <li <? e($p->isOpen(), ' class="active"') ?>>
                        <a href="<?= $p->url() ?>">
                            <?= $p->title()->html() ?>
                        </a>
                    </li>
                <? endforeach ?>
            </ul>
      </div>
    </div>
  </nav>
<script>
function openNav() {
document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
document.getElementById("myNav").style.width = "0%";
}
</script>