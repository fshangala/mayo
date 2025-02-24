<?php
class Page {
  public $title = 'Default';
  public $content = 'This is the default content.';

  function renderHead() {
    include('head.php');
  }

  function renderHeader() {
    echo '<header>';
    echo '<h1>' . $this->title . '</h1>';
    echo '</header>';
  }

  function renderContent() {
    echo '<p>' . $this->content . '</p>';
  }

  function renderFooter() {
    echo '</body>';
    echo '</html>';
  }

  function render() {
    ?>

    <!doctype html>
    <html lang="en-US">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <?php
    $this->renderHead();
    ?>
 
    <body class="home page-template-default page page-id-15 wp-embed-responsive ui-a-dsmm-slide  elementor-default elementor-kit-3 elementor-page elementor-page-15">
    
    <?php
    $this->renderHeader();
    $this->renderContent();
    $this->renderFooter();
    include('trailing.php');
    ?>

    </body>
    </html>

    <?php
  }
}