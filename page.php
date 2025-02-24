<?php
class Page {
  public $title = 'Default';
  public $content = 'This is the default content.';

  function render() {
    ?>

    <!doctype html>
    <html lang="en-US">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <?php
    include('head.php');
    ?>
 
    <body class="home page-template-default page page-id-15 wp-embed-responsive ui-a-dsmm-slide  elementor-default elementor-kit-3 elementor-page elementor-page-15">
    <div class="uicore-animation-bg"></div>
    <div class="uicore-body-content">
    <?php
    include('footer.php');
    include('trailing.php');
    ?>
    </div>
    </body>
    </html>

    <?php
  }
}