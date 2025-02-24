<?php
include('page.php');

class Index extends Page {
  public function __construct() {
    $this->title = 'Mayo';
    $this->content = 'Welcome to the home page.';
  }
}

$index = new Index();
$index->render();