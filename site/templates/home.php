<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="row">
      <div class="medium-12 columns">
        <div class="row animated fadeIn">
          <div class="medium-6 columns medium-offset-1 end">
            <div class="text">
              <h1><?php echo $site->author()->html() ?></h1>
              <?php echo $page->text()->kirbytext() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>
