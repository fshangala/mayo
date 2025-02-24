<?php
class Page {
  public $title = 'Meyo';

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
		<!-- 1.2 uicore_before_page_content -->
		<div id="uicore-page">
    <?php
    include('header.php');
    ?>
    <!-- 1.3 uicore_page -->
    <div id="content" class="uicore-content">
    <!-- 1.4 uicore_before_content -->
    <div id="primary" class="content-area">

    <article id="post-15" class="post-15 page type-page status-publish hentry">
      <main class="entry-content">
        <div data-elementor-type="wp-page" data-elementor-id="15" class="elementor elementor-15"
          data-elementor-settings="{&quot;element_pack_global_tooltip_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;element_pack_global_tooltip_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;element_pack_global_tooltip_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}">
          <?php
          include("hero.php");
          include('satisfaction.php');
          include('features.php');
          include('reviews.php');
          include('faq.php');
          ?>
        </div>
      </main>
    </article>
    </div>
    </div>
    <?php
    include('footer.php');
    include('trailing.php');
    ?>
    </div>
    </div>
    </body>
    </html>

    <?php
  }
}