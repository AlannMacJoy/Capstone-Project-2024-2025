<?php 

include("config.php");
$con=connect();


$news_events=$con->query("SELECT * FROM news_events");
$count_news=$news_events->num_rows;
$news_events_edit=$con->query("SELECT * FROM news_events");
$news_thumbnail=$con->query("SELECT * FROM news_events");

$slideshow_announcement=$con->query("SELECT * FROM slideshow WHERE type='Announcement'");
$slideshow_banner=$con->query("SELECT * FROM slideshow WHERE type='Banner'");
?>
<!doctype html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
      <script>
         window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/forestlakeparks.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.5"}};
         /*! This file is auto-generated */
         !function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
      </script>
      <style id='wp-emoji-styles-inline-css'>
         img.wp-smiley, img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 0.07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style>
      <style id='classic-theme-styles-inline-css'>
         /*! This file is auto-generated */
         .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
      </style>
      <style id='global-styles-inline-css'>
         body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
         .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
         :where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
         :where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
         .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
      </style>
      <link rel='stylesheet' id='awsm-jobs-general-css' href='css/general.min.css?ver=3.4.6' media='all' /><!--nothing-->
      <link rel='stylesheet' id='awsm-jobs-style-css' href='css/style.min.css?ver=3.4.6' media='all' /><!--nothing-->
      <link rel='stylesheet' id='elementor-frontend-css' href='css/frontend-lite.min.css?ver=3.22.3' media='all' /><!--nothing-->
      <link rel='stylesheet' id='swiper-css' href='css/swiper.min.css?ver=8.4.5' media='all' /> <!--This is slideshow-->
      <link rel='stylesheet' id='elementor-post-180-css' href='css/post-180.css?ver=1720053500' media='all' /><!--font color-->
      <link rel='stylesheet' id='elementor-pro-css' href='css/frontend-lite.min.css?ver=3.22.1' media='all' /><!--nothing-->
      <link rel='stylesheet' id='elementor-global-css' href='css/global.css?ver=1720054184' media='all' /><!--nothing-->
      <link rel='stylesheet' id='elementor-post-154-css' href='css/post-154.css?ver=1720054021' media='all' /><!--page design-->
      <link rel='stylesheet' id='hello-elementor-css' href='css/style.min1.css?ver=3.0.1' media='all' /><!--for hiding outer box page-->
      <link rel='stylesheet' id='hello-elementor-theme-style-css' href='css/theme.min.css?ver=3.0.1' media='all' /><!--nothing-->
      <link rel='stylesheet' id='hello-elementor-header-footer-css' href='css/header-footer.min.css?ver=3.0.1' media='all' /><!--nothing-->
      <link rel='stylesheet' id='dflip-style-css' href='css/dflip.min.css?ver=2.2.54' media='all' /><!--nothing-->
      <link rel='stylesheet' id='elementor-post-108-css' href='css/post-108.css?ver=1720053500' media='all' /><!--this is for navigation-->
      <link rel='stylesheet' id='elementor-post-100-css' href='css/post-100.css?ver=1720053500' media='all' /><!--this is for footer-->
      <link rel='stylesheet' id='wpr-text-animations-css-css' href='css/text-animations.min.css?ver=1.3.979' media='all' /><!--nothing-->
      <link rel='stylesheet' id='wpr-addons-css-css' href='css/frontend.min.css?ver=1.3.979' media='all' /><!--page aligning-->
      <link rel='stylesheet' id='font-awesome-5-all-css' href='css/all.min.css?ver=1.3.979' media='all' /><!--this is for arrow down nav-->
      <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Serif+Display%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.5.5' media='all' />
      <script data-cfasync="false" src="js/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script><!--this is for text animated slide to right-->
      <script src="js/page-transitions.min.js?ver=3.22.1" id="page-transitions-js"></script><!--Page transition mamaya ka-->
      <!--<link rel="https://api.w.org/" href="https://forestlakeparks.com/wp-json/" />
      <link rel="alternate" type="application/json" href="https://forestlakeparks.com/wp-json/wp/v2/pages/154" />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://forestlakeparks.com/xmlrpc.php?rsd" />
      <meta name="generator" content="WordPress 6.5.5" />
      <link rel='shortlink' href='https://forestlakeparks.com/' />
      <link rel="alternate" type="application/json+oembed" href="https://forestlakeparks.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforestlakeparks.com%2F" />
      <link rel="alternate" type="text/xml+oembed" href="https://forestlakeparks.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fforestlakeparks.com%2F&#038;format=xml" />-->
      <meta name="generator" content="Elementor 3.22.3; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
      <link rel="icon" href="wp-content/uploads/2024/02/ForestLake_Logo-min-150x150.png" sizes="32x32" />
      <link rel="icon" href="wp-content/uploads/2024/02/ForestLake_Logo-min.png" sizes="192x192" />
      <link rel="apple-touch-icon" href="wp-content/uploads/2024/02/ForestLake_Logo-min.png" />
      <meta name="msapplication-TileImage" content="wp-content/uploads/2024/02/ForestLake_Logo-min.png" />

      <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/style1.css">

      <style id="wpr_lightbox_styles">
         .lg-backdrop {
         background-color: rgba(0,0,0,0.6) !important;
         }
         .lg-toolbar,
         .lg-dropdown {
         background-color: rgba(0,0,0,0.8) !important;
         }
         .lg-dropdown:after {
         border-bottom-color: rgba(0,0,0,0.8) !important;
         }
         .lg-sub-html {
         background-color: rgba(0,0,0,0.8) !important;
         }
         .lg-thumb-outer,
         .lg-progress-bar {
         background-color: #444444 !important;
         }
         .lg-progress {
         background-color: #a90707 !important;
         }
         .lg-icon {
         color: #efefef !important;
         font-size: 20px !important;
         }
         .lg-icon.lg-toogle-thumb {
         font-size: 24px !important;
         }
         .lg-icon:hover,
         .lg-dropdown-text:hover {
         color: #ffffff !important;
         }
         .lg-sub-html,
         .lg-dropdown-text {
         color: #efefef !important;
         font-size: 14px !important;
         }
         #lg-counter {
         color: #efefef !important;
         font-size: 14px !important;
         }
         .lg-prev,
         .lg-next {
         font-size: 35px !important;
         }
         /* Defaults */
         .lg-icon {
         background-color: transparent !important;
         }
         #lg-counter {
         opacity: 0.9;
         }
         .lg-thumb-outer {
         padding: 0 10px;
         }
         .lg-thumb-item {
         border-radius: 0 !important;
         border: none !important;
         opacity: 0.5;
         }
         .lg-thumb-item.active {
         opacity: 1;
         }
         .cont-1{
            width: 100%;
            text-align: center;
         }
      </style>
   </head>
   <body class="home page-template page-template-elementor_header_footer page page-id-154 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-180 elementor-page elementor-page-154">
      <e-page-transition preloader-type="animation" preloader-animation-type="opposing-nested-spinners" class="e-page-transition--entering" exclude="^https\:\/\/forestlakeparks\.com\/wp\-admin\/">
      </e-page-transition>
      <header data-elementor-type="header" data-elementor-id="108" class="elementor elementor-108 elementor-location-header" data-elementor-post-type="elementor_library">
         <div class="elementor-element elementor-element-76ea29a8 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="76ea29a8" data-element_type="container" id="top" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;position&quot;:&quot;fixed&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
            <div class="elementor-element elementor-element-504063b animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="504063b" data-element_type="widget" id="Original-Logo" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="image.default">
               <div class="elementor-widget-container">
                  <style>/*! elementor - v3.22.0 - 26-06-2024 */
                     .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}
                  </style>
                  <a href="#">
                  <img fetchpriority="high" width="2405" height="1580" src="wp-content/uploads/2024/02/ForestLake_Logo_Light-min.png" class="attachment-full size-full wp-image-197" alt="" srcset="wp-content/uploads/2024/02/ForestLake_Logo_Light-min.png 2405w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-300x197.png 300w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-1024x673.png 1024w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-768x505.png 768w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-1536x1009.png 1536w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-2048x1345.png 2048w, wp-content/uploads/2024/02/elementor/thumbs/ForestLake_Logo_Light-min-qk7qyxtj6kutl6iz9y844nuxyag7643gcxig5pbt60.png 150w" sizes="(max-width: 2405px) 100vw, 2405px" />								</a>
               </div>
            </div>

            
            <div class="elementor-element elementor-element-8736348 wpr-sub-icon-chevron-down wpr-nav-menu-bp-tablet animated-slow wpr-main-menu-align-left wpr-main-menu-align--tabletleft wpr-main-menu-align--mobileleft wpr-pointer-underline wpr-pointer-line-fx wpr-pointer-fx-fade wpr-sub-menu-fx-fade wpr-mobile-menu-full-width wpr-mobile-menu-item-align-center wpr-mobile-toggle-v1 wpr-sub-divider-yes wpr-mobile-divider-yes elementor-invisible elementor-widget elementor-widget-wpr-nav-menu" data-id="8736348" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;menu_layout&quot;:&quot;horizontal&quot;}" data-widget_type="wpr-nav-menu.default">
               <div class="elementor-widget-container">
                  <nav class="wpr-nav-menu-container wpr-nav-menu-horizontal" data-trigger="hover">
                     <ul id="menu-1-8736348" class="wpr-nav-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-154 current_page_item menu-item-1447"><a href="https://riczziot.online/https://riczziot.online/" aria-current="page" class="wpr-menu-item wpr-pointer-item wpr-active-menu-item">Home</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1960"><a href="https://forestlakeparks.com/about-forest-lake/" class="wpr-menu-item wpr-pointer-item">About Us</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1960"><a href="./User/Find_Grave.php" class="wpr-menu-item wpr-pointer-item">Map</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3238">
                           <a href="Parks" class="wpr-menu-item wpr-pointer-item">Parks<i class="wpr-sub-icon fas" aria-hidden="true"></i></a>
                           <ul class="sub-menu wpr-sub-menu">
                              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3239"><a href="Parks/Luzon/" class="wpr-sub-menu-item">Luzon</a></li>
                              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3240"><a href="/Visayas" class="wpr-sub-menu-item">Visayas</a></li>
                              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3241"><a href="/Mindanao" class="wpr-sub-menu-item">Mindanao</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3853">
                           <a href="#" class="wpr-menu-item wpr-pointer-item">Services<i class="wpr-sub-icon fas" aria-hidden="true"></i></a>
                           <ul class="sub-menu wpr-sub-menu">
                              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3854"><a href="https://services.forestlakeparks.com/forest-lake-binan-chapel/" class="wpr-sub-menu-item">Chapel</a></li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4666"><a href="https://forestlakeparks.com/policies-on-interment/" class="wpr-sub-menu-item">Schedule An Interment</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4567">
                           <a href="https://forestlakeparks.com/our-stories/" class="wpr-menu-item wpr-pointer-item">Our Stories<i class="wpr-sub-icon fas" aria-hidden="true"></i></a>
                           <ul class="sub-menu wpr-sub-menu">
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1619"><a href="https://forestlakeparks.com/our-stories/blog/" class="wpr-sub-menu-item">Blog</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3651">
                           <a href="#" class="wpr-menu-item wpr-pointer-item">Join Us<i class="wpr-sub-icon fas" aria-hidden="true"></i></a>
                           <ul class="sub-menu wpr-sub-menu">
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3737"><a href="https://forestlakeparks.com/careers/" class="wpr-sub-menu-item">Careers</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984"><a href="https://forestlakeparks.com/contact/" class="wpr-menu-item wpr-pointer-item">Contact Us</a></li>
                     </ul>
                  </nav>
                  <nav class="wpr-mobile-nav-menu-container">
                     <div class="wpr-mobile-toggle-wrap">
                        <div class="wpr-mobile-toggle"><span class="wpr-mobile-toggle-line"></span><span class="wpr-mobile-toggle-line"></span><span class="wpr-mobile-toggle-line"></span></div>
                     </div>
                     <ul id="mobile-menu-2-8736348" class="wpr-mobile-nav-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-154 current_page_item menu-item-1447"><a href="https://riczziot.online/" aria-current="page" class="wpr-mobile-menu-item wpr-active-menu-item">Home</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1960"><a href="https://forestlakeparks.com/about-forest-lake/" class="wpr-mobile-menu-item">About Us</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1960"><a href="https://riczziot.online/User/Find_Grave.php" class="wpr-mobile-menu-item">Map</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3238">
                           <a href="Parks" class="wpr-mobile-menu-item">Parks</a>
                           <ul class="sub-menu wpr-sub-menu">
                              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3239"><a href="Parks/Luzon/" class="wpr-mobile-sub-menu-item">Luzon</a></li>
                              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3240"><a href="/Visayas" class="wpr-mobile-sub-menu-item">Visayas</a></li>
                              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3241"><a href="/Mindanao" class="wpr-mobile-sub-menu-item">Mindanao</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3853">
                           <a href="#" class="wpr-mobile-menu-item">Services</a>
                           <ul class="sub-menu wpr-sub-menu">
                              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3854"><a href="https://services.forestlakeparks.com/forest-lake-binan-chapel/" class="wpr-mobile-sub-menu-item">Chapel</a></li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4666"><a href="https://forestlakeparks.com/policies-on-interment/" class="wpr-mobile-sub-menu-item">Schedule An Interment</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4567">
                           <a href="https://forestlakeparks.com/our-stories/" class="wpr-mobile-menu-item">Our Stories</a>
                           <ul class="sub-menu wpr-sub-menu">
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1619"><a href="https://forestlakeparks.com/our-stories/blog/" class="wpr-mobile-sub-menu-item">Blog</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3651">
                           <a href="#" class="wpr-mobile-menu-item">Join Us</a>
                           <ul class="sub-menu wpr-sub-menu">
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3737"><a href="https://forestlakeparks.com/careers/" class="wpr-mobile-sub-menu-item">Careers</a></li>
                           </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984"><a href="https://forestlakeparks.com/contact/" class="wpr-mobile-menu-item">Contact Us</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
			<!--end-->
               <div class="elementor-element elementor-element-0a133a5 elementor-search-form--skin-full_screen elementor-widget elementor-widget-search-form" data-id="0a133a5" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;full_screen&quot;}" data-widget_type="search-form.default">
                  <div class="elementor-widget-container">
                     <link rel="stylesheet" href="wp-content/plugins/elementor-pro/assets/css/widget-theme-elements.min.css">
                     <search role="search">
                        <form class="elementor-search-form" action="https://forestlakeparks.com" method="get">
                           <div class="elementor-search-form__toggle" tabindex="0" role="button">
                              <div class="e-font-icon-svg-container">
                                 <svg aria-hidden="true" class="e-font-icon-svg e-fas-search" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                 </svg>
                              </div>
                              <span class="elementor-screen-only">Search</span>
                           </div>
                           <div class="elementor-search-form__container">
                              <label class="elementor-screen-only" for="elementor-search-form-0a133a5">Search</label>
                              <input id="elementor-search-form-0a133a5" placeholder="SEARCH HERE..." class="elementor-search-form__input" type="search" name="s" value="">
                              <div class="dialog-lightbox-close-button dialog-close-button" role="button" tabindex="0">
                                 <svg aria-hidden="true" class="e-font-icon-svg e-eicon-close" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
                                 </svg>
                                 <span class="elementor-screen-only">Close this search box.</span>
                              </div>
                           </div>
                        </form>
                     </search>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div data-elementor-type="wp-page" data-elementor-id="154" class="elementor elementor-154" data-elementor-settings="{&quot;scroll_snap&quot;:&quot;yes&quot;}" data-elementor-post-type="page">
         <div class="elementor-element elementor-element-266e098 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="266e098" data-element_type="container" id="Home" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;Assets/video.mp4&quot;,&quot;background_video_start&quot;:1,&quot;background_video_end&quot;:1000,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
            <div class="elementor-background-video-container">
               <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline loop></video>
            </div>
            <div class="elementor-element elementor-element-c3e2e1b e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="c3e2e1b" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
               <div class="elementor-element elementor-element-66c56338 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="66c56338" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <style>/*! elementor - v3.22.0 - 26-06-2024 */
                        .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
                     </style>
                     <h1 class="elementor-heading-title elementor-size-default">A Better Place</h1>
                  </div>
               </div>
               <div class="elementor-element elementor-element-defb082 animated-slow elementor-invisible elementor-widget elementor-widget-sina_fancytext" data-id="defb082" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="sina_fancytext.default">
                  <div class="elementor-widget-container">
                     <div class="sina-fancytext"
                        data-fancy-text="Grow With Us.@@It's A Lot Better Here.@@Libing Anywhere.@@"
                        data-anim="typing"
                        data-speed="200"
                        data-delay="100"
                        data-cursor="yes"
                        data-loop="yes">
                        <h2>
                           <span class="sina-fancytext-strings">
                           Grow With Us.					</span>
                        </h2>
                     </div>
                     <!-- .sina-fancytext -->
                  </div>
               </div>
            </div>
         </div>
                  <!--second slide-->
                  <?php while($row=$slideshow_announcement->fetch_array()){ ?>
            <div class="elementor-element elementor-element-5e735f4 e-con-full promo-box e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent swiper-slide announcement" data-id="5e735f4" data-element_type="container" id="Chapels" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;Assets/image/Forest-Lake-Memorial-Parks-_-A-Better-Place.mp4&quot;,&quot;background_video_start&quot;:1,&quot;background_video_end&quot;:1000,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}" style="width: auto 1920px; height: 1080px;">
            <div class="elementor-background-video-container">
               <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline loop></video>
            </div>
            <div class="elementor-element elementor-element-12b65d0 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="12b65d0" data-element_type="container">
               <div class="elementor-element elementor-element-f785d37 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="f785d37" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                  <h1 class="elementor-heading-title elementor-size-default announcement-title text-uppercase">Announcement</h1>

                  <div class="row mb-4">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="announcement-ws">
                                            <h2>WHAT:</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="announcement-desc text-start">
                                            <h3 class="text-capitalize"><?php echo $row["what"] ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="announcement-ws">
                                            <h2>WHEN:</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="announcement-desc text-start">
                                            <h3><?php echo date("M j, Y", strtotime($row["when"])) ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="announcement-ws">
                                            <h2>WHERE:</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="announcement-desc text-start">
                                            <h3><?php echo $row["where"] ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="announcement-ws">
                                            <h2>WHO:</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="announcement-desc text-start">
                                            <h3><?php echo $row["who"] ?></h3>
                                        </div>
                                    </div>
                                </div> 
                            </center>
                  </div>
               </div>
               <div class="elementor-element elementor-element-12b65d0 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="12b65d0" data-element_type="container">
               <div class="elementor-element elementor-element-18a83df animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="18a83df" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                  </div>
               </div>
            </div>
         </div>
         </div><?php } ?>
                     <!--end-->

         <!--Start-->
         <div class="elementor-element elementor-element-508ab04 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="508ab04" data-element_type="container" id="CustomerPortal" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;Assets/Customer-on-mobile-phone.mp4&quot;,&quot;background_video_start&quot;:1,&quot;background_video_end&quot;:1000,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
            <div class="elementor-background-video-container">
               <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline loop></video>
            </div>
            <div class="elementor-element elementor-element-8a51e92 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="8a51e92" data-element_type="container">
               <div class="elementor-element elementor-element-471ebd3 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="471ebd3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}" data-widget_type="heading.default">
               </div>
            </div>
         </div>
         <!--End-->

         <!--Start-->
         <div class="elementor-element elementor-element-433ade7 e-con-full promo-box e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="433ade7" data-element_type="container" id="AgentPortal" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;Assets/Selling-on-mobile-phone.mp4&quot;,&quot;background_video_start&quot;:1,&quot;background_video_end&quot;:1000,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
            <div class="elementor-background-video-container">
               <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline loop></video>
            </div>
            <div class="elementor-element elementor-element-983513b e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="983513b" data-element_type="container">
               <div class="elementor-element elementor-element-32ea09d animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="32ea09d" data-element_type="widget" id="AgentPortal" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}" data-widget_type="heading.default">
               </div>
            </div>
         </div>
         <!--End-->
         <!--Start-->
         <div class="elementor-element elementor-element-5e735f4 e-con-full promo-box e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="5e735f4" data-element_type="container" id="Chapels" data-settings="{&quot;background_background&quot;:&quot;video&quot;,&quot;background_video_link&quot;:&quot;Assets/Forest-Lake-Chapels.mp4&quot;,&quot;background_video_start&quot;:1,&quot;background_video_end&quot;:1000,&quot;background_play_on_mobile&quot;:&quot;yes&quot;}">
            <div class="elementor-background-video-container">
               <video class="elementor-background-video-hosted elementor-html5-video" autoplay muted playsinline loop></video>
            </div>
            <div class="elementor-element elementor-element-12b65d0 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="12b65d0" data-element_type="container">
               <div class="elementor-element elementor-element-f785d37 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="f785d37" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}" data-widget_type="heading.default">
                  <div class="elementor-widget-container cont-1">
                     <h1 class="elementor-heading-title elementor-size-default">ForestLake Manaoag Maps</h1>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d2166.8380742803224!2d120.4844490387474!3d16.04446954615786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e0!4m3!3m2!1d16.0439491!2d120.48741989999999!4m3!3m2!1d16.0450346!2d120.4840571!5e1!3m2!1sen!2sph!4v1720318511913!5m2!1sen!2sph" width="767" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d8667.617199733812!2d120.47847674184683!3d16.03837928854651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e0!4m3!3m2!1d16.0439491!2d120.48741989999999!4m3!3m2!1d16.0328096!2d120.4797213!5e1!3m2!1sen!2sph!4v1720318233280!5m2!1sen!2sph" width="767" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
         </div>
         </div>
         <!--End-->

         <!--Start-->
         <div class="elementor-element elementor-element-576547b e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="576547b" data-element_type="container" id="ContactUs" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-8d06b63 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="8d06b63" data-element_type="container">
               <div class="elementor-element elementor-element-dfc1300 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="dfc1300" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;}" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Contact Us</h2>
                  </div>
               </div>
               <div class="elementor-element elementor-element-f2650f4 animated-slow elementor-invisible elementor-widget elementor-widget-heading" data-id="f2650f4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <p class="elementor-heading-title elementor-size-default">For general questions, you can chat with us or proceed to contact us page and send us an inquiry. One of our sales representatives will respond.</p>
                  </div>
               </div>
               <div class="elementor-element elementor-element-c65f2dd e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="c65f2dd" data-element_type="container" data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_effect&quot;:&quot;yes&quot;,&quot;motion_fx_translateY_direction&quot;:&quot;negative&quot;,&quot;motion_fx_translateY_affectedRange&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:50,&quot;end&quot;:100}},&quot;motion_fx_translateY_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]},&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;]}">
                  <div class="elementor-element elementor-element-db5fd7d elementor-widget__width-auto elementor-widget-mobile__width-auto animated-slow elementor-invisible elementor-widget elementor-widget-button" data-id="db5fd7d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_animation_delay&quot;:1000}" data-widget_type="button.default">
                     <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                           <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-wobble-vertical" href="https://forestlakeparks.com/contact/">
                              <span class="elementor-button-content-wrapper">
                                 <span class="elementor-button-icon">
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z"></path>
                                    </svg>
                                 </span>
                                 <span class="elementor-button-text">proceed to the page</span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--End-->

         <!--Start-->
         <div class="elementor-element elementor-element-80da899 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="80da899" data-element_type="container">
            <div class="elementor-element elementor-element-cc9905b e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="cc9905b" data-element_type="container">
               <div class="elementor-element elementor-element-900fdc1 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="900fdc1" data-element_type="container">
                  <div class="elementor-element elementor-element-b5a865d wpr-promo-box-style-cover elementor-widget elementor-widget-wpr-promo-box" data-id="b5a865d" data-element_type="widget" data-widget_type="wpr-promo-box.default">
                     <div class="elementor-widget-container">
                        <div class="wpr-promo-box wpr-animation-wrap">
                           <div class="wpr-promo-box-image">
                              <div class="wpr-promo-box-bg-image wpr-bg-anim-zoom-in wpr-anim-timing-ease-default" style="background-image:url(wp-content/uploads/2024/04/IMG_8546-768x512.jpg);"></div>
                              <div class="wpr-promo-box-bg-overlay wpr-border-anim-none"></div>
                           </div>
                           <div class="wpr-promo-box-content">
                              <div class="wpr-promo-box-icon">
                              </div>
                              <h3 class="wpr-promo-box-title"><span>Forest Lake Products</span></h3>
                              <div class="wpr-promo-box-description">
                                 <p>
                                 <p>We offer variety of products for every customer…</p>
                                 </p>	
                              </div>
                              <div class="wpr-promo-box-btn-wrap">
                                 <a class="wpr-promo-box-btn" href="/Products">
                                 <span class="wpr-promo-box-btn-text">Read more</span>		
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End-->

               <!--Start-->
               <div class="elementor-element elementor-element-eb87559 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="eb87559" data-element_type="container">
                  <div class="elementor-element elementor-element-819401b wpr-promo-box-style-cover elementor-widget elementor-widget-wpr-promo-box" data-id="819401b" data-element_type="widget" data-widget_type="wpr-promo-box.default">
                     <div class="elementor-widget-container">
                        <div class="wpr-promo-box wpr-animation-wrap">
                           <div class="wpr-promo-box-image">
                              <div class="wpr-promo-box-bg-image wpr-bg-anim-zoom-in wpr-anim-timing-ease-default" style="background-image:url(wp-content/uploads/2024/03/admsdgfe9uit934-600x600-1.jpg);"></div>
                              <div class="wpr-promo-box-bg-overlay wpr-border-anim-none"></div>
                           </div>
                           <div class="wpr-promo-box-content">
                              <div class="wpr-promo-box-icon">
                              </div>
                              <h3 class="wpr-promo-box-title"><span>Amenities</span></h3>
                              <div class="wpr-promo-box-description">
                                 <p>
                                 <p>Always striving to give you more ever time you visit…</p>
                                 </p>	
                              </div>
                              <div class="wpr-promo-box-btn-wrap">
                                 <a class="wpr-promo-box-btn" href="/Amenities">
                                 <span class="wpr-promo-box-btn-text">Read more</span>		
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End-->

               <!--Start-->
               <div class="elementor-element elementor-element-9586c3f e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="9586c3f" data-element_type="container">
                  <div class="elementor-element elementor-element-8225372 wpr-promo-box-style-cover elementor-widget elementor-widget-wpr-promo-box" data-id="8225372" data-element_type="widget" data-widget_type="wpr-promo-box.default">
                     <div class="elementor-widget-container">
                        <div class="wpr-promo-box wpr-animation-wrap">
                           <div class="wpr-promo-box-image">
                              <div class="wpr-promo-box-bg-image wpr-bg-anim-zoom-in wpr-anim-timing-ease-default" style="background-image:url(wp-content/uploads/2024/04/bauang-4-768x512.jpg);"></div>
                              <div class="wpr-promo-box-bg-overlay wpr-border-anim-none"></div>
                           </div>
                           <div class="wpr-promo-box-content">
                              <div class="wpr-promo-box-icon">
                              </div>
                              <h3 class="wpr-promo-box-title"><span>Guidelines</span></h3>
                              <div class="wpr-promo-box-description">
                                 <p>
                                 <p>For Interment, Lawn Area and Estate &amp; Legacy…</p>
                                 </p>	
                              </div>
                              <div class="wpr-promo-box-btn-wrap">
                                 <a class="wpr-promo-box-btn" href="/Guidelines">
                                 <span class="wpr-promo-box-btn-text">Read more</span>		
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--End-->

      <!--Start-->
      <footer data-elementor-type="footer" data-elementor-id="100" class="elementor elementor-100 elementor-location-footer" data-elementor-post-type="elementor_library">
         <div class="elementor-element elementor-element-423536ef e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="423536ef" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;shape_divider_top&quot;:&quot;opacity-tilt&quot;}">
            <div class="elementor-shape elementor-shape-top" data-negative="false">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
                  <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z"/>
                  <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z"/>
                  <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z"/>
               </svg>
            </div>
            <div class="elementor-element elementor-element-638fc00e e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="638fc00e" data-element_type="container">
               <div class="elementor-element elementor-element-7029d52 elementor-widget elementor-widget-image" data-id="7029d52" data-element_type="widget" data-widget_type="image.default">
                  <div class="elementor-widget-container">
                     <img width="2405" height="1580" src="wp-content/uploads/2024/02/ForestLake_Logo_Light-min.png" class="attachment-full size-full wp-image-197" alt="" srcset="wp-content/uploads/2024/02/ForestLake_Logo_Light-min.png 2405w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-300x197.png 300w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-1024x673.png 1024w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-768x505.png 768w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-1536x1009.png 1536w, wp-content/uploads/2024/02/ForestLake_Logo_Light-min-2048x1345.png 2048w, wp-content/uploads/2024/02/elementor/thumbs/ForestLake_Logo_Light-min-qk7qyxtj6kutl6iz9y844nuxyag7643gcxig5pbt60.png 150w" sizes="(max-width: 2405px) 100vw, 2405px" />													
                  </div>
               </div>
               <div class="elementor-element elementor-element-9d6463d elementor-widget elementor-widget-text-editor" data-id="9d6463d" data-element_type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                     <style>/*! elementor - v3.22.0 - 26-06-2024 */
                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}
                     </style>
                     First Floor, Vinuya Street&#8217; <br> Manaoag, 2430 Pangasinan						
                  </div>
               </div>
               <div class="elementor-element elementor-element-ea45c26 elementor-widget elementor-widget-text-editor" data-id="ea45c26" data-element_type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                     EMAIL<br>
                     forestlakemanaoag@gmail.com						
                  </div>
               </div>
               <div class="elementor-element elementor-element-1abd3df0 elementor-shape-circle elementor-grid-3 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="1abd3df0" data-element_type="widget" data-widget_type="social-icons.default">
                  <div class="elementor-widget-container">
                     <style>/*! elementor - v3.22.0 - 26-06-2024 */
                        .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));height:calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:inline-flex;background-color:#69727d;align-items:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#69727d}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-threads{background-color:#000}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-x-twitter{background-color:#000}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded .elementor-icon.elementor-social-icon{border-radius:10%}.elementor-shape-circle .elementor-icon.elementor-social-icon{border-radius:50%}
                     </style>
                     <div class="elementor-social-icons-wrapper elementor-grid">
                        <span class="elementor-grid-item">
                           <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-shrink elementor-repeater-item-a1eceb2" href="https://www.facebook.com/profile.php?id=61556460411570" target="_blank">
                              <span class="elementor-screen-only">Facebook-f</span>
                              <svg class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                              </svg>
                           </a>
                        </span>
                        <span class="elementor-grid-item">
                           <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-27c4ff3" href="https://www.youtube.com/@forestlakeparks" target="_blank">
                              <span class="elementor-screen-only">Youtube</span>
                              <svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                              </svg>
                           </a>
                        </span>
                        <span class="elementor-grid-item">
                           <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-521bbd3" href="https://www.instagram.com/forestlake/" target="_blank">
                              <span class="elementor-screen-only">Instagram</span>
                              <svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                              </svg>
                           </a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-52fda347 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="52fda347" data-element_type="container">
               <div class="elementor-element elementor-element-3e79dbb elementor-widget elementor-widget-heading" data-id="3e79dbb" data-element_type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Quick Links</h2>
                  </div>
               </div>
               <div class="elementor-element elementor-element-3298e1a elementor-nav-menu__align-start elementor-nav-menu--dropdown-none elementor-widget elementor-widget-nav-menu" data-id="3298e1a" data-element_type="widget" id="Footer" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;}}" data-widget_type="nav-menu.default">
                  <div class="elementor-widget-container">
                     <link rel="stylesheet" href="wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css">
                     <nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
                        <ul id="menu-1-3298e1a" class="elementor-nav-menu sm-vertical">
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4551"><a href="https://forestlakeparks.com/about-forest-lake/" class="elementor-item">About ForestLake Parks</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4552"><a href="https://forestlakeparks.com/parks/" class="elementor-item">Parks</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4554"><a href="/parks/luzon/binan/chapels/" class="elementor-item">Chapels</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4555"><a href="/become-a-seller" class="elementor-item">Become A Seller</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4556"><a href="/sell-your-property" class="elementor-item">Submit A Property</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4557"><a href="https://forestlakeparks.com/contact/" class="elementor-item">Contact</a></li>
                        </ul>
                     </nav>
                     <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                        <ul id="menu-2-3298e1a" class="elementor-nav-menu sm-vertical">
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4551"><a href="https://forestlakeparks.com/about-forest-lake/" class="elementor-item" tabindex="-1">About ForestLake Parks</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4552"><a href="https://forestlakeparks.com/parks/" class="elementor-item" tabindex="-1">Parks</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4554"><a href="/parks/luzon/binan/chapels/" class="elementor-item" tabindex="-1">Chapels</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4555"><a href="/become-a-seller" class="elementor-item" tabindex="-1">Become A Seller</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4556"><a href="/sell-your-property" class="elementor-item" tabindex="-1">Submit A Property</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4557"><a href="https://forestlakeparks.com/contact/" class="elementor-item" tabindex="-1">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <div class="elementor-element elementor-element-aa09b77 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="aa09b77" data-element_type="container">
               <div class="elementor-element elementor-element-1f3df81 elementor-widget elementor-widget-heading" data-id="1f3df81" data-element_type="widget" data-widget_type="heading.default">
                  <div class="elementor-widget-container">
                     <h2 class="elementor-heading-title elementor-size-default">Other Links</h2>
                  </div>
               </div>
               <div class="elementor-element elementor-element-d3d91ec elementor-nav-menu__align-start elementor-nav-menu--dropdown-none elementor-widget elementor-widget-nav-menu" data-id="d3d91ec" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;}}" data-widget_type="nav-menu.default">
                  <div class="elementor-widget-container">
                     <nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none">
                        <ul id="menu-1-d3d91ec" class="elementor-nav-menu sm-vertical">
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4559"><a href="https://forestlakeparks.com/guidelines/" class="elementor-item">Park Guidelines</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4560"><a href="https://forestlakeparks.com/amenities/" class="elementor-item">Features And Amenities</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4562"><a href="https://forestlakeparks.com/products/" class="elementor-item">Our Products</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4568"><a href="/our-stories/videos" class="elementor-item">Videos</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4569"><a href="/our-stories/newsletter" class="elementor-item">Newsletter</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4570"><a href="https://forestlakeparks.com/our-stories/blog/" class="elementor-item">Blog</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4571"><a href="https://forestlakeparks.com/careers/" class="elementor-item">Careers</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4572"><a href="/privacy-policy" class="elementor-item">Privacy Policy</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4573"><a href="/terms-and-conditions" class="elementor-item">Terms And Conditions</a></li>
                        </ul>
                     </nav>
                     <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                        <ul id="menu-2-d3d91ec" class="elementor-nav-menu sm-vertical">
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4559"><a href="https://forestlakeparks.com/guidelines/" class="elementor-item" tabindex="-1">Park Guidelines</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4560"><a href="https://forestlakeparks.com/amenities/" class="elementor-item" tabindex="-1">Features And Amenities</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4562"><a href="https://forestlakeparks.com/products/" class="elementor-item" tabindex="-1">Our Products</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4568"><a href="/our-stories/videos" class="elementor-item" tabindex="-1">Videos</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4569"><a href="/our-stories/newsletter" class="elementor-item" tabindex="-1">Newsletter</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4570"><a href="https://forestlakeparks.com/our-stories/blog/" class="elementor-item" tabindex="-1">Blog</a></li>
                           <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4571"><a href="https://forestlakeparks.com/careers/" class="elementor-item" tabindex="-1">Careers</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4572"><a href="/privacy-policy" class="elementor-item" tabindex="-1">Privacy Policy</a></li>
                           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4573"><a href="/terms-and-conditions" class="elementor-item" tabindex="-1">Terms And Conditions</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-4d3878e e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="4d3878e" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-element elementor-element-86fb58f e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-child" data-id="86fb58f" data-element_type="container">
               <div class="elementor-element elementor-element-eea8c38 elementor-widget elementor-widget-text-editor" data-id="eea8c38" data-element_type="widget" data-widget_type="text-editor.default">
                  <div class="elementor-widget-container">
                     <p><span style="margin: 0;">© Copyright 2024 Forest Lake | All Rights Reserved</span><br /><br /><span style="margin: 0;">Designed by <strong>pocholodslayer</strong></span></p><span style="margin: 0;">Redesign by <strong>BSIT 4 BLOCK 2.</strong></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="elementor-element elementor-element-3a6d735 e-con-full e-flex wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="3a6d735" data-element_type="container">
         </div>
         <div class="elementor-element elementor-element-f795f08 e-flex e-con-boxed wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no e-con e-parent" data-id="f795f08" data-element_type="container">
            <div class="e-con-inner">
               <div class="elementor-element elementor-element-84a6196 wpr-stt-btn-align-fixed wpr-stt-btn-align-fixed-right elementor-widget elementor-widget-wpr-back-to-top" data-id="84a6196" data-element_type="widget" data-widget_type="wpr-back-to-top.default">
                  <div class="elementor-widget-container">
                     <div class="wpr-stt-wrapper">
                        <div class='wpr-stt-btn' data-settings='{&quot;animation&quot;:&quot;fade&quot;,&quot;animationOffset&quot;:&quot;0&quot;,&quot;animationDuration&quot;:&quot;200&quot;,&quot;fixed&quot;:&quot;fixed&quot;,&quot;scrolAnim&quot;:&quot;800&quot;}'>
                           <span class="wpr-stt-icon">
                              <svg class="e-font-icon-svg e-fas-chevron-up" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--End-->

      <!--Javascripts-->
      <link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.22.3' media='all' />
      <link rel='stylesheet' id='wpr-link-animations-css-css' href='wp-content/plugins/royal-elementor-addons/assets/css/lib/animations/wpr-link-animations.min.css?ver=1.3.979' media='all' />
      <link rel='stylesheet' id='animate-merge-css' href='wp-content/plugins/sina-extension-for-elementor/assets/css/animate-merge.min.css?ver=3.5.6' media='all' />
      <link rel='stylesheet' id='sina-widgets-css' href='wp-content/plugins/sina-extension-for-elementor/assets/css/sina-widgets.min.css?ver=3.5.6' media='all' />
      <link rel='stylesheet' id='wpr-animations-css-css' href='wp-content/plugins/royal-elementor-addons/assets/css/lib/animations/wpr-animations.min.css?ver=1.3.979' media='all' />
      <script id="awsm-job-scripts-js-extra">
         var awsmJobsPublic = {"ajaxurl":"https:\/\/forestlakeparks.com\/wp-admin\/admin-ajax.php","is_tax_archive":"","is_search":"","job_id":"0","wp_max_upload_size":"268435456","deep_linking":{"search":true,"spec":true,"pagination":true},"i18n":{"loading_text":"Loading...","form_error_msg":{"general":"Error in submitting your application. Please try again later!","file_validation":"The file you have selected is too large."}},"vendors":{"selectric":true,"jquery_validation":true}};
      </script>
      <script src="wp-content/plugins/wp-job-openings/assets/js/script.min.js?ver=3.4.6" id="awsm-job-scripts-js"></script>
      <script src="wp-content/plugins/royal-elementor-addons/assets/js/lib/particles/particles.js?ver=3.0.6" id="wpr-particles-js"></script>
      <script src="wp-content/plugins/royal-elementor-addons/assets/js/lib/jarallax/jarallax.min.js?ver=1.12.7" id="wpr-jarallax-js"></script>
      <script src="wp-content/plugins/royal-elementor-addons/assets/js/lib/parallax/parallax.min.js?ver=1.0" id="wpr-parallax-hover-js"></script>
      <script src="wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=3.0.1" id="hello-theme-frontend-js"></script>
      <script src="wp-content/plugins/3d-flipbook-dflip-lite/assets/js/dflip.min.js?ver=2.2.54" id="dflip-script-js"></script>
      <script src="wp-content/plugins/elementor-pro/assets//lib/instant-page/instant-page.min.js?ver=3.22.1" id="instant-page-js"></script>
      <script src="wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.22.1" id="e-sticky-js"></script>
      <script src="wp-content/plugins/sina-extension-for-elementor/assets/js/typed.min.js?ver=3.5.6" id="typed-js"></script>
      <script id="sina-widgets-js-extra">
         var sinaAjax = {"ajaxURL":"https:\/\/forestlakeparks.com\/wp-admin\/admin-ajax.php"};
      </script>
      <script src="wp-content/plugins/sina-extension-for-elementor/assets/js/sina-widgets.min.js?ver=3.5.6" id="sina-widgets-js"></script>
      <script src="wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.2.1" id="smartmenus-js"></script>
      <script src="wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.22.1" id="elementor-pro-webpack-runtime-js"></script>
      <script src="wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.22.3" id="elementor-webpack-runtime-js"></script>
      <script src="wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.22.3" id="elementor-frontend-modules-js"></script>
      <script src="wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
      <script src="wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js"></script>
      <script src="wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
      <script src="wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
      <script src="wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
      <script id="wp-i18n-js-after">
         wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
      </script>
      <script id="elementor-pro-frontend-js-before">
         var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/forestlakeparks.com\/wp-admin\/admin-ajax.php","nonce":"6558b0a1f9","urls":{"assets":"https:\/\/forestlakeparks.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/forestlakeparks.com\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/forestlakeparks.com\/wp-content\/plugins\/elementor-pro\/modules\/ltie\/assets\/animations\/default.json"}};
      </script>
      <script src="wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.22.1" id="elementor-pro-frontend-js"></script>
      <script src="wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
      <script src="wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
      <script id="elementor-frontend-js-before">
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.22.3","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"e_font_icon_svg":true,"additional_custom_breakpoints":true,"container":true,"container_grid":true,"e_swiper_latest":true,"e_onboarding":true,"theme_builder_v2":true,"hello-theme-header-footer":true,"home_screen":true,"ai-layout":true,"landing-pages":true,"display-conditions":true,"form-submissions":true,"taxonomy-filter":true},"urls":{"assets":"https:\/\/forestlakeparks.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":{"scroll_snap":"yes"},"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","hello_header_logo_type":"logo","hello_header_menu_layout":"horizontal","hello_footer_logo_type":"logo"},"post":{"id":154,"title":"Memorial%20Park%20Philippines%20%7C%20Forest%20Lake%20Memorial%20Parks","excerpt":"","featuredImage":"https:\/\/forestlakeparks.com\/wp-content\/uploads\/2024\/04\/forestlakeslide56-600x600-1.jpg"}};
      </script>
      <script src="wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.22.3" id="elementor-frontend-js"></script>
      <script src="wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.22.1" id="pro-elements-handlers-js"></script>
      <script id="wpr-addons-js-js-extra">
         var WprConfig = {"ajaxurl":"https:\/\/forestlakeparks.com\/wp-admin\/admin-ajax.php","resturl":"https:\/\/forestlakeparks.com\/wp-json\/wpraddons\/v1","nonce":"051b9f3bfa","addedToCartText":"was added to cart","viewCart":"View Cart","comparePageID":"","comparePageURL":"https:\/\/forestlakeparks.com\/","wishlistPageID":"","wishlistPageURL":"https:\/\/forestlakeparks.com\/","chooseQuantityText":"Please select the required number of items.","site_key":"","is_admin":"","input_empty":"Please fill out this field","select_empty":"Nothing selected","file_empty":"Please upload a file","recaptcha_error":"Recaptcha Error"};
      </script>
      <script data-cfasync="false" src="wp-content/plugins/royal-elementor-addons/assets/js/frontend.min.js?ver=1.3.979" id="wpr-addons-js-js"></script>
      <script src="wp-content/plugins/royal-elementor-addons/assets/js/modal-popups.min.js?ver=1.3.979" id="wpr-modal-popups-js-js"></script>
      <script data-cfasync="false"> var dFlipLocation = "wp-content/plugins/3d-flipbook-dflip-lite/assets/"; var dFlipWPGlobal = {"text":{"toggleSound":"Turn on\/off Sound","toggleThumbnails":"Toggle Thumbnails","toggleOutline":"Toggle Outline\/Bookmark","previousPage":"Previous Page","nextPage":"Next Page","toggleFullscreen":"Toggle Fullscreen","zoomIn":"Zoom In","zoomOut":"Zoom Out","toggleHelp":"Toggle Help","singlePageMode":"Single Page Mode","doublePageMode":"Double Page Mode","downloadPDFFile":"Download PDF File","gotoFirstPage":"Goto First Page","gotoLastPage":"Goto Last Page","share":"Share","mailSubject":"I wanted you to see this FlipBook","mailBody":"Check out this site {{url}}","loading":"DearFlip: Loading "},"moreControls":"download,pageMode,startPage,endPage,sound","hideControls":"","scrollWheel":"false","backgroundColor":"#777","backgroundImage":"","height":"auto","paddingLeft":"20","paddingRight":"20","controlsPosition":"bottom","duration":800,"soundEnable":"true","enableDownload":"true","showSearchControl":"false","showPrintControl":"false","enableAnnotation":false,"enableAnalytics":"false","webgl":"true","hard":"none","maxTextureSize":"1600","rangeChunkSize":"524288","zoomRatio":1.5,"stiffness":3,"pageMode":"0","singlePageMode":"0","pageSize":"0","autoPlay":"false","autoPlayDuration":5000,"autoPlayStart":"false","linkTarget":"2","sharePrefix":"flipbook-"};</script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!--End-->
   </body>
</html>