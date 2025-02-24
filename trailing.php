<!-- 1.7 uicore_after_body_content -->
<script>
  var uicore_frontend = { 'back': 'Back', 'rtl': '', 'mobile_br': '1025' };
  console.log('Using UiCore Pro v.1.0.8');
  console.log('Powered By UiCore Framework v.6.0.1');
</script>
<script type='text/javascript'>
  const lazyloadRunObserver = () => {
    const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
    const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          let lazyloadBackground = entry.target;
          if (lazyloadBackground) {
            lazyloadBackground.classList.add('e-lazyloaded');
          }
          lazyloadBackgroundObserver.unobserve(entry.target);
        }
      });
    }, { rootMargin: '200px 0px 200px 0px' });
    lazyloadBackgrounds.forEach((lazyloadBackground) => {
      lazyloadBackgroundObserver.observe(lazyloadBackground);
    });
  };
  const events = [
    'DOMContentLoaded',
    'elementor/lazyload/observe',
  ];
  events.forEach((event) => {
    document.addEventListener(event, lazyloadRunObserver);
  });
</script>
<link rel='stylesheet' id='ui-e-animated-border-css'
  href='wp-content/plugins/uicore-animate/assets/css/animated-borderc1b4.css?ver=2.0.5' media='all' />
<link rel='stylesheet' id='ui-e-logo-grid-css'
  href='wp-content/plugins/uicore-elements/assets/css/elements/logo-grid7daa.css?ver=1.0.13' media='all' />
<link rel='stylesheet' id='ui-e-icon-box-css'
  href='wp-content/plugins/uicore-elements/assets/css/elements/icon-box7daa.css?ver=1.0.13' media='all' />
<link rel='stylesheet' id='ui-e-testimonial-carousel-css'
  href='wp-content/plugins/uicore-elements/assets/css/elements/testimonial-carousel7daa.css?ver=1.0.13' media='all' />
<link rel='stylesheet' id='ui-e-accordion-css'
  href='wp-content/plugins/uicore-elements/assets/css/elements/accordion7daa.css?ver=1.0.13' media='all' />
<link rel='stylesheet' id='ui-e-fluid-css' href='wp-content/plugins/uicore-animate/assets/css/fluidc1b4.css?ver=2.0.5'
  media='all' />
<link rel='stylesheet' id='ep-mailchimp-css'
  href='wp-content/plugins/bdthemes-element-pack/assets/css/ep-mailchimp0566.css?ver=7.18.9' media='all' />
<link rel='stylesheet' id='widget-social-icons-css'
  href='wp-content/plugins/elementor/assets/css/widget-social-icons.min5422.css?ver=3.25.9' media='all' />
<link rel='stylesheet' id='e-apple-webkit-css'
  href='wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min5422.css?ver=3.25.9' media='all' />
<script id="bdt-uikit-js-extra">
  var element_pack_ajax_login_config = { "ajaxurl": "https:\/\/upshift.uicore.co\/web-app\/wp-admin\/admin-ajax.php", "language": "en", "loadingmessage": "Sending user info, please wait...", "unknownerror": "Unknown error, make sure access is correct!" };
  var ElementPackConfig = { "ajaxurl": "https:\/\/upshift.uicore.co\/web-app\/wp-admin\/admin-ajax.php", "nonce": "e0ffbafa7b", "data_table": { "language": { "sLengthMenu": "Show _MENU_ Entries", "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries", "sSearch": "Search :", "sZeroRecords": "No matching records found", "oPaginate": { "sPrevious": "Previous", "sNext": "Next" } } }, "contact_form": { "sending_msg": "Sending message please wait...", "captcha_nd": "Invisible captcha not defined!", "captcha_nr": "Could not get invisible captcha response!" }, "mailchimp": { "subscribing": "Subscribing you please wait..." }, "search": { "more_result": "More Results", "search_result": "SEARCH RESULT", "not_found": "not found" }, "words_limit": { "read_more": "[read more]", "read_less": "[read less]" }, "elements_data": { "sections": [], "columns": [], "widgets": [] } };
</script>
<script src="wp-content/plugins/bdthemes-element-pack/assets/js/bdt-uikit.min4ecf.js?ver=3.21.7"
  id="bdt-uikit-js"></script>
<script src="wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-switcher.min0566.js?ver=7.18.9"
  id="ep-switcher-js"></script>
<script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min5422.js?ver=3.25.9"
  id="elementor-webpack-runtime-js"></script>
<script src="wp-content/plugins/elementor/assets/js/frontend-modules.min5422.js?ver=3.25.9"
  id="elementor-frontend-modules-js"></script>
<script src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">
  var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } }, "hasCustomBreakpoints": false }, "version": "3.25.9", "is_static": false, "experimentalFeatures": { "e_font_icon_svg": true, "additional_custom_breakpoints": true, "container": true, "e_swiper_latest": true, "e_nested_atomic_repeaters": true, "e_onboarding": true, "e_css_smooth_scroll": true, "home_screen": true, "landing-pages": true, "nested-elements": true, "editor_v2": true, "link-in-bio": true, "floating-buttons": true }, "urls": { "assets": "https:\/\/upshift.uicore.co\/web-app\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/upshift.uicore.co\/web-app\/wp-admin\/admin-ajax.php", "uploadUrl": "https:\/\/upshift.uicore.co\/web-app\/wp-content\/uploads\/sites\/7" }, "nonces": { "floatingButtonsClickTracking": "ddbf596758" }, "swiperClass": "swiper", "settings": { "page": { "element_pack_global_tooltip_width": { "unit": "px", "size": "", "sizes": [] }, "element_pack_global_tooltip_width_tablet": { "unit": "px", "size": "", "sizes": [] }, "element_pack_global_tooltip_width_mobile": { "unit": "px", "size": "", "sizes": [] }, "element_pack_global_tooltip_padding": { "unit": "px", "top": "", "right": "", "bottom": "", "left": "", "isLinked": true }, "element_pack_global_tooltip_padding_tablet": { "unit": "px", "top": "", "right": "", "bottom": "", "left": "", "isLinked": true }, "element_pack_global_tooltip_padding_mobile": { "unit": "px", "top": "", "right": "", "bottom": "", "left": "", "isLinked": true }, "element_pack_global_tooltip_border_radius": { "unit": "px", "top": "", "right": "", "bottom": "", "left": "", "isLinked": true }, "element_pack_global_tooltip_border_radius_tablet": { "unit": "px", "top": "", "right": "", "bottom": "", "left": "", "isLinked": true }, "element_pack_global_tooltip_border_radius_mobile": { "unit": "px", "top": "", "right": "", "bottom": "", "left": "", "isLinked": true } }, "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 15, "title": "Web%20App%20%E2%80%93%20Upshift%20WordPress%20Theme", "excerpt": "", "featuredImage": false } };
</script>
<script src="wp-content/plugins/elementor/assets/js/frontend.min5422.js?ver=3.25.9"
  id="elementor-frontend-js"></script>
<script src="wp-content/plugins/uicore-elements/assets/js/utils/global-carousel7daa.js?ver=1.0.13"
  id="ui-e-carousel-js"></script>
<script src="wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-remote-thumbs.min0566.js?ver=7.18.9"
  id="ep-remote-thumbs-js"></script>
<script src="wp-content/uploads/sites/7/uicore-global8bc5.js?ver=7660" id="uicore_global-js"></script>
<script src="wp-content/plugins/bdthemes-element-pack/assets/js/common/helper.min0566.js?ver=7.18.9"
  id="element-pack-helper-js"></script>
<script src="wp-content/plugins/uicore-animate/assets/js/animated-borderc1b4.js?ver=2.0.5"
  id="ui-e-animated-border-js"></script>
<script src="wp-content/plugins/uicore-elements/assets/js/elements/logo-grid7daa.js?ver=1.0.13"
  id="ui-e-logo-grid-js"></script>
<script src="wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-background-overlay.min0566.js?ver=7.18.9"
  id="ep-background-overlay-js"></script>
<script src="wp-content/plugins/uicore-elements/assets/js/utils/carousel-effects/circular7daa.js?ver=1.0.13"
  id="ui-e-utils/carousel-effects/circular-js"></script>
<script src="wp-content/plugins/uicore-elements/assets/js/elements/accordion7daa.js?ver=1.0.13"
  id="ui-e-accordion-js"></script>
<script src="wp-content/plugins/uicore-animate/assets/js/fluidc1b4.js?ver=2.0.5" id="ui-e-fluid-js"></script>
<script src="wp-content/plugins/bdthemes-element-pack/assets/js/modules/ep-mailchimp.min0566.js?ver=7.18.9"
  id="ep-mailchimp-js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4HRCJB" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->