

<!doctype html>
<html lang="en" class="js no-svg">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="https://gmpg.org/xfn/11">
      <!-- Google Analytics opt-out snippet added by Site Kit -->
      <script>
         window["ga-disable-"] = true;
      </script>
      <!-- End Google Analytics opt-out snippet added by Site Kit -->
      <title>DevCheatSheet</title>
      <meta name='robots' content='max-image-preview:large' />
      <link rel='dns-prefetch' href='//s.w.org' />
      <link rel='dns-prefetch' href='//pagead2.googlesyndication.com' />
      <link rel="alternate" type="application/rss+xml" title="DevCheatSheet &raquo; Feed" href="https://devcheatsheet.tk/feed/" />
      <link rel="alternate" type="application/rss+xml" title="DevCheatSheet &raquo; Comments Feed" href="https://devcheatsheet.tk/comments/feed/" />
      <script>
         window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/devcheatsheet.tk\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9"}};
         /*! This file is auto-generated */
         !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
      </script>
      <style>
         img.wp-smiley,
         img.emoji {
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
      <link rel='stylesheet' id='dashicons-css'  href='https://devcheatsheet.tk/wp-includes/css/dashicons.min.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='admin-bar-css'  href='https://devcheatsheet.tk/wp-includes/css/admin-bar.min.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='elementor-icons-css'  href='https://devcheatsheet.tk/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.14.0' media='all' />
      <link rel='stylesheet' id='elementor-common-css'  href='https://devcheatsheet.tk/wp-content/plugins/elementor/assets/css/common.min.css?ver=3.5.4' media='all' />
      <link rel='stylesheet' id='wp-block-library-css'  href='https://devcheatsheet.tk/wp-includes/css/dist/block-library/style.min.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='embedpress_blocks-cgb-style-css-css'  href='https://devcheatsheet.tk/wp-content/plugins/embedpress/Gutenberg/dist/blocks.style.build.css?ver=1642914193' media='all' />
      <style id='global-styles-inline-css'>
         body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
      </style>
      <link rel='stylesheet' id='embedpress-css'  href='https://devcheatsheet.tk/wp-content/plugins/embedpress/assets/css/embedpress.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='blogwaves-parent-style-css'  href='https://devcheatsheet.tk/wp-content/themes/blogwaves/style.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='masonry-blogwaves-style-css'  href='https://devcheatsheet.tk/wp-content/themes/masonry-blogwaves/style.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='font-awesome-css-child-css'  href='https://devcheatsheet.tk/wp-content/themes/masonry-blogwaves/assets/css/font-awesome.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='bootstrap-css-css'  href='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/css/bootstrap.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='font-awesome-css-css'  href='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/css/font-awesome.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='blogwaves-meanmenu-css-css'  href='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/css/meanmenu.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='blogwaves-responsive-css-css'  href='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/css/responsive.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='blogwaves-custom-css-css'  href='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/css/custom.css?ver=5.9' media='all' />
      <link rel='stylesheet' id='blogwaves-style-css'  href='https://devcheatsheet.tk/wp-content/themes/masonry-blogwaves/style.css?ver=1.0.0' media='all' />
      <link rel='stylesheet' id='googlesitekit-fonts-css'  href='https://fonts.googleapis.com/css?family=Google+Sans:300,300i,400,400i,500,500i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&#038;subset=latin-ext&#038;display=fallback' media='all' />
      <link rel='stylesheet' id='googlesitekit-adminbar-css-css'  href='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/css/googlesitekit-adminbar-css-307a340ed7072ef33d50.min.css' media='all' />
      <script src='https://devcheatsheet.tk/wp-content/plugins/embedpress/assets/js/pdfobject.min.js?ver=3.3.3' id='embedpress-pdfobject-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/themes/masonry-blogwaves/assets/js/blogwaves-main.js?ver=1' id='masonry-blogwaves-main-js'></script>
      <link rel="https://api.w.org/" href="https://devcheatsheet.tk/wp-json/" />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://devcheatsheet.tk/xmlrpc.php?rsd" />
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://devcheatsheet.tk/wp-includes/wlwmanifest.xml" />
      <meta name="generator" content="WordPress 5.9" />
      <meta name="generator" content="Site Kit by Google 1.49.1" />
      <!-- Google AdSense snippet added by Site Kit -->
      <meta name="google-adsense-platform-account" content="ca-host-pub-2644536267352236">
      <meta name="google-adsense-platform-domain" content="sitekit.withgoogle.com">
      <!-- End Google AdSense snippet added by Site Kit -->
      <style media="print">#wpadminbar { display:none; }</style>
      <style media="screen">
         html { margin-top: 32px !important; }
         @media screen and ( max-width: 782px ) {
         html { margin-top: 46px !important; }
         }
      </style>
      <!-- Google AdSense snippet added by Site Kit -->
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2659338945475050" crossorigin="anonymous"></script>
      <!-- End Google AdSense snippet added by Site Kit -->
      <link rel="icon" href="https://devcheatsheet.tk/wp-content/uploads/2022/01/cropped-logo-32x32.png" sizes="32x32" />
      <link rel="icon" href="https://devcheatsheet.tk/wp-content/uploads/2022/01/cropped-logo-192x192.png" sizes="192x192" />
      <link rel="apple-touch-icon" href="https://devcheatsheet.tk/wp-content/uploads/2022/01/cropped-logo-180x180.png" />
      <meta name="msapplication-TileImage" content="https://devcheatsheet.tk/wp-content/uploads/2022/01/cropped-logo-270x270.png" />
   </head>
   <body class="home blog logged-in admin-bar no-customize-support hfeed has-wide-layout elementor-default elementor-kit-14">
      <script>
         (function() {
         	var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');
         
         		request = true;
         
         	b[c] = b[c].replace( rcs, ' ' );
         	// The customizer requires postMessage and CORS (if the site is cross domain).
         	b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
         }());
      </script>
      <div id="wpadminbar" class="nojq nojs">
         <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Toolbar">
            <ul id='wp-admin-bar-root-default' class="ab-top-menu">
               <li id='wp-admin-bar-wp-logo' class="menupop">
                  <a class='ab-item' aria-haspopup="true" href='https://devcheatsheet.tk/wp-admin/about.php'><span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">About WordPress</span></a>
                  <div class="ab-sub-wrapper">
                     <ul id='wp-admin-bar-wp-logo-default' class="ab-submenu">
                        <li id='wp-admin-bar-about'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/about.php'>About WordPress</a></li>
                     </ul>
                     <ul id='wp-admin-bar-wp-logo-external' class="ab-sub-secondary ab-submenu">
                        <li id='wp-admin-bar-wporg'><a class='ab-item' href='https://wordpress.org/'>WordPress.org</a></li>
                        <li id='wp-admin-bar-documentation'><a class='ab-item' href='https://wordpress.org/support/'>Documentation</a></li>
                        <li id='wp-admin-bar-support-forums'><a class='ab-item' href='https://wordpress.org/support/forums/'>Support</a></li>
                        <li id='wp-admin-bar-feedback'><a class='ab-item' href='https://wordpress.org/support/forum/requests-and-feedback'>Feedback</a></li>
                     </ul>
                  </div>
               </li>
               <li id='wp-admin-bar-site-name' class="menupop">
                  <a class='ab-item' aria-haspopup="true" href='https://devcheatsheet.tk/wp-admin/'>DevCheatSheet</a>
                  <div class="ab-sub-wrapper">
                     <ul id='wp-admin-bar-site-name-default' class="ab-submenu">
                        <li id='wp-admin-bar-dashboard'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/'>Dashboard</a></li>
                     </ul>
                     <ul id='wp-admin-bar-appearance' class="ab-submenu">
                        <li id='wp-admin-bar-themes'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/themes.php'>Themes</a></li>
                        <li id='wp-admin-bar-widgets'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/widgets.php'>Widgets</a></li>
                        <li id='wp-admin-bar-menus'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/nav-menus.php'>Menus</a></li>
                        <li id='wp-admin-bar-background' class="hide-if-customize"><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/themes.php?page=custom-background'>Background</a></li>
                        <li id='wp-admin-bar-header' class="hide-if-customize"><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/themes.php?page=custom-header'>Header</a></li>
                     </ul>
                  </div>
               </li>
               <li id='wp-admin-bar-customize' class="hide-if-no-customize"><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/customize.php?url=https%3A%2F%2Fdevcheatsheet.tk%2F'>Customize</a></li>
               <li id='wp-admin-bar-comments'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/edit-comments.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 Comments in moderation</span></a></li>
               <li id='wp-admin-bar-new-content' class="menupop">
                  <a class='ab-item' aria-haspopup="true" href='https://devcheatsheet.tk/wp-admin/post-new.php'><span class="ab-icon" aria-hidden="true"></span><span class="ab-label">New</span></a>
                  <div class="ab-sub-wrapper">
                     <ul id='wp-admin-bar-new-content-default' class="ab-submenu">
                        <li id='wp-admin-bar-new-post'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/post-new.php'>Post</a></li>
                        <li id='wp-admin-bar-new-media'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/media-new.php'>Media</a></li>
                        <li id='wp-admin-bar-new-page'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/post-new.php?post_type=page'>Page</a></li>
                        <li id='wp-admin-bar-new-e-landing-page'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/edit.php?action=elementor_new_post&#038;post_type=e-landing-page&#038;template_type=landing-page&#038;_wpnonce=200975b521#library'>Landing Page</a></li>
                        <li id='wp-admin-bar-new-elementor_library'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/post-new.php?post_type=elementor_library'>Template</a></li>
                        <li id='wp-admin-bar-new-user'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/user-new.php'>User</a></li>
                     </ul>
                  </div>
               </li>
               <li id='wp-admin-bar-google-site-kit' class="menupop googlesitekit-wp-adminbar">
                  <a class='ab-item' href='#'><span class="googlesitekit-wp-adminbar__icon"></span> <span class="googlesitekit-wp-adminbar__label">Site Kit</span></a>		
                  <div class="googlesitekit-plugin ab-sub-wrapper">
                     <noscript>
                        <div class="googlesitekit-noscript notice notice-warning">
                           <div class="mdc-layout-grid">
                              <div class="mdc-layout-grid__inner">
                                 <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
                                    <p class="googlesitekit-noscript__text">
                                       The Site Kit by Google plugin requires JavaScript to be enabled in your browser.								
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </noscript>
                     <div id="js-googlesitekit-adminbar" class="googlesitekit-adminbar">
                        <section id="js-googlesitekit-adminbar-modules" class="googlesitekit-adminbar-modules"></section>
                     </div>
                  </div>
               </li>
            </ul>
            <ul id='wp-admin-bar-top-secondary' class="ab-top-secondary ab-top-menu">
               <li id='wp-admin-bar-search' class="admin-bar-search">
                  <div class="ab-item ab-empty-item" tabindex="-1">
                     <form action="https://devcheatsheet.tk/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search" /></form>
                  </div>
               </li>
               <li id='wp-admin-bar-my-account' class="menupop with-avatar">
                  <a class='ab-item' aria-haspopup="true" href='https://devcheatsheet.tk/wp-admin/profile.php'>Howdy, <span class="display-name">admin</span><img alt='' src='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=26&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=52&#038;d=mm&#038;r=g 2x' class='avatar avatar-26 photo' height='26' width='26' loading='lazy'/></a>
                  <div class="ab-sub-wrapper">
                     <ul id='wp-admin-bar-user-actions' class="ab-submenu">
                        <li id='wp-admin-bar-user-info'><a class='ab-item' tabindex="-1" href='https://devcheatsheet.tk/wp-admin/profile.php'><img alt='' src='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=64&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=128&#038;d=mm&#038;r=g 2x' class='avatar avatar-64 photo' height='64' width='64' loading='lazy'/><span class='display-name'>admin</span></a></li>
                        <li id='wp-admin-bar-edit-profile'><a class='ab-item' href='https://devcheatsheet.tk/wp-admin/profile.php'>Edit Profile</a></li>
                        <li id='wp-admin-bar-logout'><a class='ab-item' href='https://devcheatsheet.tk/wp-login.php?action=logout&#038;_wpnonce=dfe0796c05'>Log Out</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
         <a class="screen-reader-shortcut" href="https://devcheatsheet.tk/wp-login.php?action=logout&#038;_wpnonce=dfe0796c05">Log Out</a>
      </div>
      <div id="page" class="site-wrapper site">
         <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
         <header  id="masthead" class="wp-main-header">
            <div class="nav-brand" >
               <div class="container">
                  <div class="row">
                     <div class="blogwave-site-naming-wrapper logo-area text-center">
                        <div class="blogwave-site-branding">
                           <h1 class="site-title"><a href="https://devcheatsheet.tk/" title="DevCheatSheet" rel="home">DevCheatSheet</a></h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Start Navbar Area -->
            <nav id="site-navigation" class="main-navigation menu-bg" role="navigation" aria-label="Top Menu">
               <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
               <i class="icon fa fa-bars"></i>
               </button>
               <div class="menu-header_menu-container">
                  <ul id="top-menu" class="menu">
                     <li id="menu-item-72" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-72"><a href="https://devcheatsheet.tk" aria-current="page">Home</a></li>
                     <li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="https://devcheatsheet.tk/about/">About</a></li>
                  </ul>
               </div>
            </nav>
         </header>
         
         <div id="primary" class="site-content">
            <section class="wp-blog-section ptb-100 bg-color">
               <div class="container">
                  <div class="row has-right-sidebar">
                     <div class="col-lg-8">
                        <div class="column-2 grid">
                           <div class="blog-child-wrap grid-item" id="post-122">
                              <div class="image-part mb-25">
                              </div>
                              <div class="content-part content">
                                 <h3 class="title mb-20"><a href="https://devcheatsheet.tk/info/codex-2-0-by-interviewbit/">Scaler CODEX 2.0 (By InterviewBit)</a></h3>
                                 <ul class="blog-meta mb-20">
                                    <li><img alt='' src='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=30&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=60&#038;d=mm&#038;r=g 2x' class='avatar avatar-30 photo' height='30' width='30' loading='lazy'/><span class="byline"> <span class="author vcard"><a class="url fn n" href="https://devcheatsheet.tk/author/admin/">admin</a></span></span></li>
                                    <li><i class="fas fa-calendar-week"></i><span class="posted-on"> <a href="https://devcheatsheet.tk/info/codex-2-0-by-interviewbit/" rel="bookmark"><time class="entry-date published" datetime="2022-01-31T16:52:41+00:00">January 31, 2022</time><time class="updated" datetime="2022-01-31T16:54:22+00:00">January 31, 2022</time></a></span></li>
                                    <li><i class="fa fa-comment"></i> 0 </li>
                                 </ul>
                                 <p>Scaler (By InterviewBit) is organizing a codeathon called CODEX 2.0 on 6th February. They are offering a lot of swags and internships as rewards. It will be a live coding competition and is going to be held on 6th Feb&hellip;</p>
                                 <a class="read-more" href="https://devcheatsheet.tk/info/codex-2-0-by-interviewbit/">Read More <i class="fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="blog-child-wrap grid-item" id="post-107">
                              <div class="image-part mb-25">
                              </div>
                              <div class="content-part content">
                                 <h3 class="title mb-20"><a href="https://devcheatsheet.tk/info/learn-salesforce/">Learn Salesforce for free</a></h3>
                                 <ul class="blog-meta mb-20">
                                    <li><img alt='' src='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=30&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=60&#038;d=mm&#038;r=g 2x' class='avatar avatar-30 photo' height='30' width='30' loading='lazy'/><span class="byline"> <span class="author vcard"><a class="url fn n" href="https://devcheatsheet.tk/author/admin/">admin</a></span></span></li>
                                    <li><i class="fas fa-calendar-week"></i><span class="posted-on"> <a href="https://devcheatsheet.tk/info/learn-salesforce/" rel="bookmark"><time class="entry-date published" datetime="2022-01-30T08:53:48+00:00">January 30, 2022</time><time class="updated" datetime="2022-01-30T08:54:36+00:00">January 30, 2022</time></a></span></li>
                                    <li><i class="fa fa-comment"></i> 0 </li>
                                 </ul>
                                 <p>We are here with a new opportunity for students to learn about Salesforce and also discover new career opportunities at salesforce. Hurry up and register for this training program. You have a chance to get free online courses, internships, Mentorship,&hellip;</p>
                                 <a class="read-more" href="https://devcheatsheet.tk/info/learn-salesforce/">Read More <i class="fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="blog-child-wrap grid-item" id="post-98">
                              <div class="image-part mb-25">
                              </div>
                              <div class="content-part content">
                                 <h3 class="title mb-20"><a href="https://devcheatsheet.tk/info/salesforce-internship/">Salesforce software engineering internship opportunity</a></h3>
                                 <ul class="blog-meta mb-20">
                                    <li><img alt='' src='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=30&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=60&#038;d=mm&#038;r=g 2x' class='avatar avatar-30 photo' height='30' width='30' loading='lazy'/><span class="byline"> <span class="author vcard"><a class="url fn n" href="https://devcheatsheet.tk/author/admin/">admin</a></span></span></li>
                                    <li><i class="fas fa-calendar-week"></i><span class="posted-on"> <a href="https://devcheatsheet.tk/info/salesforce-internship/" rel="bookmark"><time class="entry-date published" datetime="2022-01-30T08:24:13+00:00">January 30, 2022</time><time class="updated" datetime="2022-01-30T08:35:45+00:00">January 30, 2022</time></a></span></li>
                                    <li><i class="fa fa-comment"></i> 0 </li>
                                 </ul>
                                 <p>About Futureforce University Recruiting Our Futureforce University Recruiting program is dedicated to attracting, retaining and cultivating talent. Our interns and new graduates work on real projects that affect how our business runs, giving them the opportunity to make a tangible&hellip;</p>
                                 <a class="read-more" href="https://devcheatsheet.tk/info/salesforce-internship/">Read More <i class="fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="blog-child-wrap grid-item" id="post-83">
                              <div class="image-part mb-25">
                              </div>
                              <div class="content-part content">
                                 <h3 class="title mb-20"><a href="https://devcheatsheet.tk/info/infosys-certification-exam-infytq-exam/">Infosys Certification Exam (InfyTQ Exam)</a></h3>
                                 <ul class="blog-meta mb-20">
                                    <li><img alt='' src='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=30&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=60&#038;d=mm&#038;r=g 2x' class='avatar avatar-30 photo' height='30' width='30' loading='lazy'/><span class="byline"> <span class="author vcard"><a class="url fn n" href="https://devcheatsheet.tk/author/admin/">admin</a></span></span></li>
                                    <li><i class="fas fa-calendar-week"></i><span class="posted-on"> <a href="https://devcheatsheet.tk/info/infosys-certification-exam-infytq-exam/" rel="bookmark"><time class="entry-date published" datetime="2022-01-20T18:38:46+00:00">January 20, 2022</time><time class="updated" datetime="2022-01-30T08:34:45+00:00">January 30, 2022</time></a></span></li>
                                    <li><i class="fa fa-comment"></i> 0 </li>
                                 </ul>
                                 <p>As Promised here we are with good news for all 2023 Passed out students. Candidates who have applied for the InfyTQ Certification Exam 2022-2023 must check this blog and check the InfyTQ Syllabus and Exam Pattern. InfyTQ Certification Exam will&hellip;</p>
                                 <a class="read-more" href="https://devcheatsheet.tk/info/infosys-certification-exam-infytq-exam/">Read More <i class="fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="blog-child-wrap grid-item" id="post-1">
                              <div class="image-part mb-25">
                              </div>
                              <div class="content-part content">
                                 <h3 class="title mb-20"><a href="https://devcheatsheet.tk/info/intro-blog/">Welcome to DevCheatSheet</a></h3>
                                 <ul class="blog-meta mb-20">
                                    <li><img alt='' src='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=30&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1cffbfe7f85aa1193daed8f137cacf7e?s=60&#038;d=mm&#038;r=g 2x' class='avatar avatar-30 photo' height='30' width='30' loading='lazy'/><span class="byline"> <span class="author vcard"><a class="url fn n" href="https://devcheatsheet.tk/author/admin/">admin</a></span></span></li>
                                    <li><i class="fas fa-calendar-week"></i><span class="posted-on"> <a href="https://devcheatsheet.tk/info/intro-blog/" rel="bookmark"><time class="entry-date published" datetime="2022-01-16T21:41:34+00:00">January 16, 2022</time><time class="updated" datetime="2022-01-30T08:54:56+00:00">January 30, 2022</time></a></span></li>
                                    <li><i class="fa fa-comment"></i> 0 </li>
                                 </ul>
                                 <p>  Welcome to my first blog post! Ahh, I am so excited to be writing this right now, and even more, excited knowing that YOU are finally reading it! I am Govind Deshmukh, owner and author of DevCheatSheet Blog (obviously,&hellip;</p>
                                 <a class="read-more" href="https://devcheatsheet.tk/info/intro-blog/">Read More <i class="fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="pagination">
                           <nav class="Page navigation">
                              <ul class="page-numbers">
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <aside id="secondary" class="widget-area">
                           <div id="block-2" class="widget sidebar-post sidebar widget_block widget_search">
                              <form role="search" method="get" action="https://devcheatsheet.tk/" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
                                 <label for="wp-block-search__input-1" class="wp-block-search__label">Search</label>
                                 <div class="wp-block-search__inside-wrapper " ><input type="search" id="wp-block-search__input-1" class="wp-block-search__input " name="s" value="" placeholder=""  required /><button type="submit" class="wp-block-search__button  " >Search</button></div>
                              </form>
                           </div>
                           <div id="block-3" class="widget sidebar-post sidebar widget_block">
                              <div class="wp-container-61f8b2dfd30f9 wp-block-group">
                                 <div class="wp-block-group__inner-container">
                                    <h2>Recent Posts</h2>
                                    <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                                       <li><a href="https://devcheatsheet.tk/info/codex-2-0-by-interviewbit/">Scaler CODEX 2.0 (By InterviewBit)</a></li>
                                       <li><a href="https://devcheatsheet.tk/info/learn-salesforce/">Learn Salesforce for free</a></li>
                                       <li><a href="https://devcheatsheet.tk/info/salesforce-internship/">Salesforce software engineering internship opportunity</a></li>
                                       <li><a href="https://devcheatsheet.tk/info/infosys-certification-exam-infytq-exam/">Infosys Certification Exam (InfyTQ Exam)</a></li>
                                       <li><a href="https://devcheatsheet.tk/info/intro-blog/">Welcome to DevCheatSheet</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div id="block-4" class="widget sidebar-post sidebar widget_block">
                              <div class="wp-container-61f8b2dfd3601 wp-block-group">
                                 <div class="wp-block-group__inner-container">
                                    <h2>Recent Comments</h2>
                                    <div class="no-comments wp-block-latest-comments">No comments to show.</div>
                                 </div>
                              </div>
                           </div>
                           <div id="block-5" class="widget sidebar-post sidebar widget_block">
                              <div class="wp-container-61f8b2dfd387e wp-block-group">
                                 <div class="wp-block-group__inner-container"></div>
                              </div>
                           </div>
                           <div id="block-6" class="widget sidebar-post sidebar widget_block">
                              <div class="wp-container-61f8b2dfd47cf wp-block-group">
                                 <div class="wp-block-group__inner-container">
                                    <h2>Categories</h2>
                                    <ul class="wp-block-categories-list wp-block-categories">
                                       <li class="cat-item cat-item-3"><a href="https://devcheatsheet.tk/category/info/" title="This category includes news.">Informative</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </aside>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <!-- #content -->
         <footer class="footer-section-child">
            <div class="copyright-footer-child">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-md-6 text-md-center align-self-center">
                        <p>Copyright 2021</p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <!-- #page -->
      <button onclick="blogwavesTopFunction()" id="myBtn" title="Go to top">
      <i class="fa fa-angle-up"></i>
      </button> 
      <script type="text/template" id="tmpl-elementor-templates-modal__header">
         <div class="elementor-templates-modal__header__logo-area"></div>
         <div class="elementor-templates-modal__header__menu-area"></div>
         <div class="elementor-templates-modal__header__items-area">
         	<# if ( closeType ) { #>
         		<div class="elementor-templates-modal__header__close elementor-templates-modal__header__close--{{{ closeType }}} elementor-templates-modal__header__item">
         			<# if ( 'skip' === closeType ) { #>
         			<span>Skip</span>
         			<# } #>
         			<i class="eicon-close" aria-hidden="true" title="Close"></i>
         			<span class="elementor-screen-only">Close</span>
         		</div>
         	<# } #>
         	<div id="elementor-template-library-header-tools"></div>
         </div>
      </script>
      <script type="text/template" id="tmpl-elementor-templates-modal__header__logo">
         <span class="elementor-templates-modal__header__logo__icon-wrapper e-logo-wrapper">
         	<i class="eicon-elementor"></i>
         </span>
         <span class="elementor-templates-modal__header__logo__title">{{{ title }}}</span>
      </script>
      <script type="text/template" id="tmpl-elementor-finder">
         <div id="elementor-finder__search">
         	<i class="eicon-search"></i>
         	<input id="elementor-finder__search__input" placeholder="Type to find anything in Elementor" autocomplete="off">
         </div>
         <div id="elementor-finder__content"></div>
      </script>
      <script type="text/template" id="tmpl-elementor-finder-results-container">
         <div id="elementor-finder__no-results">No Results Found</div>
         <div id="elementor-finder__results"></div>
      </script>
      <script type="text/template" id="tmpl-elementor-finder__results__category">
         <div class="elementor-finder__results__category__title">{{{ title }}}</div>
         <div class="elementor-finder__results__category__items"></div>
      </script>
      <script type="text/template" id="tmpl-elementor-finder__results__item">
         <a href="{{ url }}" class="elementor-finder__results__item__link">
         	<div class="elementor-finder__results__item__icon">
         		<i class="eicon-{{{ icon }}}"></i>
         	</div>
         	<div class="elementor-finder__results__item__title">{{{ title }}}</div>
         	<# if ( description ) { #>
         		<div class="elementor-finder__results__item__description">- {{{ description }}}</div>
         	<# } #>
         </a>
         <# if ( actions.length ) { #>
         	<div class="elementor-finder__results__item__actions">
         	<# jQuery.each( actions, function() { #>
         		<a class="elementor-finder__results__item__action elementor-finder__results__item__action--{{ this.name }}" href="{{ this.url }}" target="_blank">
         			<i class="eicon-{{{ this.icon }}}"></i>
         		</a>
         	<# } ); #>
         	</div>
         <# } #>
      </script>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-dark-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 0.49803921568627" />
                  <feFuncG type="table" tableValues="0 0.49803921568627" />
                  <feFuncB type="table" tableValues="0 0.49803921568627" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 1" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0 1" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-purple-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-blue-red">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 1" />
                  <feFuncG type="table" tableValues="0 0.27843137254902" />
                  <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-midnight">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 0" />
                  <feFuncG type="table" tableValues="0 0.64705882352941" />
                  <feFuncB type="table" tableValues="0 1" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-magenta-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.78039215686275 1" />
                  <feFuncG type="table" tableValues="0 0.94901960784314" />
                  <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-purple-green">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-blue-orange">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.098039215686275 1" />
                  <feFuncG type="table" tableValues="0 0.66274509803922" />
                  <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <style>.wp-container-61f8b2dfd30f9 .alignleft { float: left; margin-right: 2em; }.wp-container-61f8b2dfd30f9 .alignright { float: right; margin-left: 2em; }</style>
      <style>.wp-container-61f8b2dfd3601 .alignleft { float: left; margin-right: 2em; }.wp-container-61f8b2dfd3601 .alignright { float: right; margin-left: 2em; }</style>
      <style>.wp-container-61f8b2dfd387e .alignleft { float: left; margin-right: 2em; }.wp-container-61f8b2dfd387e .alignright { float: right; margin-left: 2em; }</style>
      <style>.wp-container-61f8b2dfd47cf .alignleft { float: left; margin-right: 2em; }.wp-container-61f8b2dfd47cf .alignright { float: right; margin-left: 2em; }</style>
      <script id='wp_power_stats-js-extra'>
         var PowerStatsParams = {"ajaxurl":"https:\/\/devcheatsheet.tk\/wp-admin\/admin-ajax.php","ci":"YToyOntzOjEyOiJjb250ZW50X3R5cGUiO3M6NDoiaG9tZSI7czo4OiJjYXRlZ29yeSI7czowOiIiO30=.c43d9a459a0f2eb6220cdfd076abd550"};
      </script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/wp-power-stats/wp-power-stats.js' id='wp_power_stats-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/hoverintent-js.min.js?ver=2.2.1' id='hoverintent-js-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/admin-bar.min.js?ver=5.9' id='admin-bar-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/embedpress/assets/js/front.js?ver=3.3.3' id='embedpress-front-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/masonry.min.js?ver=4.2.2' id='masonry-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/js/navigation.js?ver=1.0.0' id='blogwaves-navigation-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/js/popper.js?ver=1.0.0' id='popper-js-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/js/bootstrap.js?ver=1.0.0' id='bootstrap-js-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/js/main.js?ver=1.0.0' id='blogwaves-main-js-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/js/skip-link-focus-fix.js?ver=1.0.0' id='skip-link-focus-fix-js-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/themes/blogwaves/assets/js/global.js?ver=1.0.0' id='blogwaves-global-js-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/jquery/ui/core.min.js?ver=1.13.0' id='jquery-ui-core-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.0' id='jquery-ui-mouse-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/jquery/ui/draggable.min.js?ver=1.13.0' id='jquery-ui-draggable-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/underscore.min.js?ver=1.13.1' id='underscore-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/backbone.min.js?ver=1.4.0' id='backbone-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/elementor/assets/lib/backbone/backbone.marionette.min.js?ver=2.4.5.e1' id='backbone-marionette-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/elementor/assets/lib/backbone/backbone.radio.min.js?ver=1.0.4' id='backbone-radio-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/elementor/assets/js/common-modules.min.js?ver=3.5.4' id='elementor-common-modules-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0' id='elementor-dialog-js'></script>
      <script id='wp-api-request-js-extra'>
         var wpApiSettings = {"root":"https:\/\/devcheatsheet.tk\/wp-json\/","nonce":"f12b78c546","versionString":"wp\/v2\/"};
      </script>
      <script src='https://devcheatsheet.tk/wp-includes/js/api-request.min.js?ver=5.9' id='wp-api-request-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/dist/hooks.min.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
      <script src='https://devcheatsheet.tk/wp-includes/js/dist/i18n.min.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script>
      <script id='wp-i18n-js-after'>
         wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
      </script>
      <script id='elementor-common-js-translations'>
         ( function( domain, translations ) {
         	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
         	localeData[""].domain = domain;
         	wp.i18n.setLocaleData( localeData, domain );
         } )( "elementor", { "locale_data": { "messages": { "": {} } } } );
      </script>
      <script id='elementor-common-js-before'>
         var elementorCommonConfig = {"version":"3.5.4","isRTL":false,"isDebug":false,"isElementorDebug":false,"activeModules":["ajax","finder","connect"],"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/devcheatsheet.tk\/wp-content\/plugins\/elementor\/assets\/","rest":"https:\/\/devcheatsheet.tk\/wp-json\/"},"ajax":{"url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin-ajax.php","nonce":"134178d207"},"finder":{"data":{"edit":{"title":"Edit","dynamic":true,"name":"edit"},"general":{"title":"General","dynamic":false,"items":{"saved-templates":{"title":"Saved Templates","icon":"library-save","url":"https:\/\/devcheatsheet.tk\/wp-admin\/edit.php?post_type=elementor_library&tabs_group=library","keywords":["template","section","page","library"]},"system-info":{"title":"System Info","icon":"info-circle-o","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor-system-info","keywords":["system","info","environment","elementor"]},"role-manager":{"title":"Role Manager","icon":"person","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor-role-manager","keywords":["role","manager","user","elementor"]},"knowledge-base":{"title":"Knowledge Base","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=go_knowledge_base_site","keywords":["help","knowledge","docs","elementor"]},"theme-builder":{"title":"Theme Builder","icon":"library-save","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor-app&ver=3.5.4#site-editor\/promotion","keywords":["template","header","footer","single","archive","search","404","library"]}},"name":"general"},"create":{"title":"Create","dynamic":false,"items":{"page":{"title":"Add New Page Template","icon":"plus-circle-o","url":"https:\/\/devcheatsheet.tk\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=page&_wpnonce=200975b521","keywords":["Add New Page Template","post","page","template","new","create"]},"section":{"title":"Add New Section","icon":"plus-circle-o","url":"https:\/\/devcheatsheet.tk\/wp-admin\/edit.php?action=elementor_new_post&post_type=elementor_library&template_type=section&_wpnonce=200975b521","keywords":["Add New Section","post","page","template","new","create"]},"wp-post":{"title":"Add New Post","icon":"plus-circle-o","url":"https:\/\/devcheatsheet.tk\/wp-admin\/edit.php?action=elementor_new_post&post_type=post&template_type=wp-post&_wpnonce=200975b521","keywords":["Add New Post","post","page","template","new","create"]},"wp-page":{"title":"Add New Page","icon":"plus-circle-o","url":"https:\/\/devcheatsheet.tk\/wp-admin\/edit.php?action=elementor_new_post&post_type=page&template_type=wp-page&_wpnonce=200975b521","keywords":["Add New Page","post","page","template","new","create"]},"landing-page":{"title":"Add New Landing Page","icon":"plus-circle-o","url":"https:\/\/devcheatsheet.tk\/wp-admin\/edit.php?action=elementor_new_post&post_type=e-landing-page&template_type=landing-page&_wpnonce=200975b521#library","keywords":["Add New Landing Page","post","page","template","new","create"]}},"name":"create"},"site":{"title":"Site","dynamic":false,"items":{"homepage":{"title":"Homepage","url":"https:\/\/devcheatsheet.tk","icon":"home-heart","keywords":["home","page"]},"wordpress-dashboard":{"title":"Dashboard","icon":"dashboard","url":"https:\/\/devcheatsheet.tk\/wp-admin\/","keywords":["dashboard","wordpress"]},"wordpress-menus":{"title":"Menus","icon":"wordpress","url":"https:\/\/devcheatsheet.tk\/wp-admin\/nav-menus.php","keywords":["menu","wordpress"]},"wordpress-themes":{"title":"Themes","icon":"wordpress","url":"https:\/\/devcheatsheet.tk\/wp-admin\/themes.php","keywords":["themes","wordpress"]},"wordpress-customizer":{"title":"Customizer","icon":"wordpress","url":"https:\/\/devcheatsheet.tk\/wp-admin\/customize.php","keywords":["customizer","wordpress"]},"wordpress-plugins":{"title":"Plugins","icon":"wordpress","url":"https:\/\/devcheatsheet.tk\/wp-admin\/plugins.php","keywords":["plugins","wordpress"]},"wordpress-users":{"title":"Users","icon":"wordpress","url":"https:\/\/devcheatsheet.tk\/wp-admin\/users.php","keywords":["users","profile","wordpress"]}},"name":"site"},"settings":{"title":"Settings","dynamic":false,"items":{"general-settings":{"title":"General Settings","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor","keywords":["general","settings","elementor"]},"advanced":{"title":"Advanced","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor#tab-advanced","keywords":["advanced","settings","elementor"]},"experiments":{"title":"Experiments","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor#tab-experiments","keywords":["settings","elementor","experiments"]}},"name":"settings"},"tools":{"title":"Tools","dynamic":false,"items":{"tools":{"title":"Tools","icon":"tools","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor-tools","keywords":["tools","regenerate css","safe mode","debug bar","sync library","elementor"]},"replace-url":{"title":"Replace URL","icon":"tools","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor-tools#tab-replace_url","keywords":["tools","replace url","domain","elementor"]},"maintenance-mode":{"title":"Maintenance Mode","icon":"tools","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor-tools#tab-maintenance_mode","keywords":["tools","maintenance","coming soon","elementor"]},"version-control":{"title":"Version Control","icon":"time-line","url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor-tools#tab-versions","keywords":["tools","version","control","rollback","beta","elementor"]}},"name":"tools"}}},"connect":[]};
      </script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/elementor/assets/js/common.min.js?ver=3.5.4' id='elementor-common-js'></script>
      <script id='elementor-app-loader-js-before'>
         var elementorAppConfig = {"menu_url":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=elementor-app&ver=3.5.4#site-editor\/promotion","assets_url":"https:\/\/devcheatsheet.tk\/wp-content\/plugins\/elementor\/assets\/","return_url":"https:\/\/devcheatsheet.tk\/wp-admin\/","hasPro":false,"admin_url":"https:\/\/devcheatsheet.tk\/wp-admin\/","login_url":"https:\/\/devcheatsheet.tk\/wp-login.php","site-editor":[],"import-export":[],"kit-library":[]};
      </script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/elementor/assets/js/app-loader.min.js?ver=3.5.4' id='elementor-app-loader-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/runtime-cb44977a8fa57f7542e5.js' id='googlesitekit-runtime-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-i18n-67d1c132a4d2e46fbb9f.js' id='googlesitekit-i18n-js'></script>
      <script id='googlesitekit-base-data-js-extra'>
         var _googlesitekitBaseData = {"homeURL":"https:\/\/devcheatsheet.tk\/","referenceSiteURL":"https:\/\/devcheatsheet.tk\/","userIDHash":"1623bbf0aea271cb479299ee834b8ab8","adminURL":"https:\/\/devcheatsheet.tk\/wp-admin\/","assetsURL":"https:\/\/devcheatsheet.tk\/wp-content\/plugins\/google-site-kit\/dist\/assets\/","blogPrefix":"wp_","ampMode":false,"isNetworkMode":false,"timezone":"","siteName":"DevCheatSheet","enabledFeatures":[],"webStoriesActive":false,"isOwner":true,"splashURL":"https:\/\/devcheatsheet.tk\/wp-admin\/admin.php?page=googlesitekit-splash","proxySetupURL":"https:\/\/devcheatsheet.tk\/wp-admin\/index.php?action=googlesitekit_proxy_setup_start&nonce=a5ab291ee5","proxyPermissionsURL":"https:\/\/devcheatsheet.tk\/wp-admin\/index.php?action=googlesitekit_proxy_permissions&nonce=052139e693","usingProxy":true,"wpVersion":{"version":"5.9","major":5,"minor":9},"activeModules":["search-console","adsense","analytics","pagespeed-insights"],"isSiteKitScreen":false,"trackingEnabled":false,"trackingID":"UA-130569087-3"};
      </script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-polyfills-c04bac99272e7fb1d7d0.js' id='googlesitekit-polyfills-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-vendor-9538ca334fe900a1f94f.js' id='googlesitekit-vendor-js'></script>
      <script id='googlesitekit-commons-js-extra'>
         var _googlesitekitLegacyData = {"admin":{"siteURL":"https:\/\/devcheatsheet.tk","resetSession":null,"newSitePosts":false,"connectURL":"https:\/\/devcheatsheet.tk\/wp-admin\/index.php?action=googlesitekit_connect&nonce=24cb820324","disconnectURL":"https:\/\/devcheatsheet.tk\/wp-admin\/index.php?action=googlesitekit_disconnect&nonce=e0da0d4f16"},"locale":"en","setup":{"isSiteKitConnected":true,"isResettable":true,"isAuthenticated":true,"requiredScopes":["openid","https:\/\/www.googleapis.com\/auth\/userinfo.profile","https:\/\/www.googleapis.com\/auth\/userinfo.email","https:\/\/www.googleapis.com\/auth\/siteverification","https:\/\/www.googleapis.com\/auth\/webmasters","https:\/\/www.googleapis.com\/auth\/adsense.readonly","https:\/\/www.googleapis.com\/auth\/analytics.readonly"],"grantedScopes":["https:\/\/www.googleapis.com\/auth\/userinfo.email","https:\/\/www.googleapis.com\/auth\/webmasters","https:\/\/www.googleapis.com\/auth\/analytics.readonly","https:\/\/www.googleapis.com\/auth\/adsense.readonly","openid","https:\/\/www.googleapis.com\/auth\/userinfo.profile","https:\/\/www.googleapis.com\/auth\/siteverification","https:\/\/www.googleapis.com\/auth\/analytics.provision","https:\/\/www.googleapis.com\/auth\/analytics.edit"],"unsatisfiedScopes":[],"needReauthenticate":false,"isVerified":true,"hasSearchConsoleProperty":true}};
      </script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-base-9bbfa259dd35473a4a76.js' id='googlesitekit-base-js'></script>
      <script id='googlesitekit-apifetch-data-js-extra'>
         var _googlesitekitAPIFetchData = {"nonce":"f12b78c546","nonceEndpoint":"https:\/\/devcheatsheet.tk\/wp-admin\/admin-ajax.php?action=rest-nonce","preloadedData":{"\/google-site-kit\/v1\/core\/site\/data\/connection":{"body":{"connected":true,"resettable":true,"setupCompleted":true,"hasConnectedAdmins":true,"hasMultipleAdmins":true,"ownerID":1},"headers":[]},"\/google-site-kit\/v1\/core\/user\/data\/authentication":{"body":{"authenticated":true,"requiredScopes":["openid","https:\/\/www.googleapis.com\/auth\/userinfo.profile","https:\/\/www.googleapis.com\/auth\/userinfo.email","https:\/\/www.googleapis.com\/auth\/siteverification","https:\/\/www.googleapis.com\/auth\/webmasters","https:\/\/www.googleapis.com\/auth\/adsense.readonly","https:\/\/www.googleapis.com\/auth\/analytics.readonly"],"grantedScopes":["https:\/\/www.googleapis.com\/auth\/userinfo.email","https:\/\/www.googleapis.com\/auth\/webmasters","https:\/\/www.googleapis.com\/auth\/analytics.readonly","https:\/\/www.googleapis.com\/auth\/adsense.readonly","openid","https:\/\/www.googleapis.com\/auth\/userinfo.profile","https:\/\/www.googleapis.com\/auth\/siteverification","https:\/\/www.googleapis.com\/auth\/analytics.provision","https:\/\/www.googleapis.com\/auth\/analytics.edit"],"unsatisfiedScopes":[],"needsReauthentication":false,"disconnectedReason":"","connectedProxyURL":"https:\/\/devcheatsheet.tk\/"},"headers":[]},"\/google-site-kit\/v1\/core\/modules\/data\/list":{"body":[{"slug":"site-verification","name":"Site Verification","description":"Google Site Verification allows you to manage ownership of your site.","homepage":"https:\/\/www.google.com\/webmasters\/verification\/home","internal":true,"order":0,"forceActive":true,"active":true,"connected":true,"dependencies":[],"dependants":[],"owner":null},{"slug":"search-console","name":"Search Console","description":"Google Search Console and helps you understand how Google views your site and optimize its performance in search results.","homepage":"https:\/\/search.google.com\/search-console","internal":false,"order":1,"forceActive":true,"active":true,"connected":true,"dependencies":[],"dependants":[],"owner":{"id":1,"login":"admin"}},{"slug":"adsense","name":"AdSense","description":"Earn money by placing ads on your website. It\u2019s free and easy.","homepage":"https:\/\/www.google.com\/adsense\/start?source=site-kit&url=https:\/\/devcheatsheet.tk","internal":false,"order":2,"forceActive":false,"active":true,"connected":true,"dependencies":[],"dependants":[],"owner":{"id":1,"login":"admin"}},{"slug":"analytics","name":"Analytics","description":"Get a deeper understanding of your customers. Google Analytics gives you the free tools you need to analyze data for your business in one place.","homepage":"https:\/\/analytics.google.com\/analytics\/web","internal":false,"order":3,"forceActive":false,"active":true,"connected":false,"dependencies":[],"dependants":["optimize"],"owner":null},{"slug":"analytics-4","name":"Analytics 4 (Alpha)","description":"Get a deeper understanding of your customers. Google Analytics gives you the free tools you need to analyze data for your business in one place.","homepage":"https:\/\/analytics.google.com\/analytics\/web","internal":true,"order":3,"forceActive":false,"active":true,"connected":false,"dependencies":[],"dependants":[],"owner":null},{"slug":"pagespeed-insights","name":"PageSpeed Insights","description":"Google PageSpeed Insights gives you metrics about performance, accessibility, SEO and PWA","homepage":"https:\/\/pagespeed.web.dev","internal":false,"order":4,"forceActive":false,"active":true,"connected":true,"dependencies":[],"dependants":[],"owner":null},{"slug":"optimize","name":"Optimize","description":"Create free A\/B tests that help you drive metric-based design solutions to your site","homepage":"https:\/\/optimize.google.com\/optimize\/home\/","internal":false,"order":5,"forceActive":false,"active":false,"connected":false,"dependencies":["analytics"],"dependants":[],"owner":null},{"slug":"tagmanager","name":"Tag Manager","description":"Tag Manager creates an easy to manage way to create tags on your site without updating code","homepage":"https:\/\/tagmanager.google.com\/","internal":false,"order":6,"forceActive":false,"active":false,"connected":false,"dependencies":[],"dependants":[],"owner":null}],"headers":[]},"\/google-site-kit\/v1\/modules\/search-console\/data\/settings":{"body":{"propertyID":"https:\/\/devcheatsheet.tk\/","ownerID":1},"headers":[]},"\/google-site-kit\/v1\/modules\/adsense\/data\/settings":{"body":{"ownerID":1,"accountID":"pub-2659338945475050","autoAdsDisabled":[],"clientID":"ca-pub-2659338945475050","accountStatus":"approved","siteStatus":"added","accountSetupComplete":true,"siteSetupComplete":true,"useSnippet":true,"webStoriesAdUnit":""},"headers":[]},"\/google-site-kit\/v1\/modules\/analytics\/data\/settings":{"body":{"ownerID":0,"accountID":"","adsenseLinked":false,"adsConversionID":"","anonymizeIP":true,"internalWebPropertyID":"","profileID":"","propertyID":"","trackingDisabled":["loggedinUsers"],"useSnippet":true,"canUseSnippet":true},"headers":[]},"\/google-site-kit\/v1\/modules\/analytics-4\/data\/settings":{"body":{"ownerID":0,"propertyID":"","webDataStreamID":"","measurementID":"","useSnippet":true},"headers":[]},"\/google-site-kit\/v1\/modules\/pagespeed-insights\/data\/settings":{"body":{"ownerID":0},"headers":[]},"\/google-site-kit\/v1\/core\/user\/data\/tracking":{"body":{"enabled":false},"headers":[]},"\/google-site-kit\/v1\/core\/site\/data\/admin-bar-settings":{"body":{"enabled":true},"headers":[]},"\/google-site-kit\/v1\/core\/user\/data\/dismissed-items":{"body":[],"headers":[]},"\/google-site-kit\/v1\/core\/user\/data\/dismissed-tours":{"body":[],"headers":[]}},"rootURL":"https:\/\/devcheatsheet.tk\/wp-json\/"};
      </script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-api-6d5a142c0a8e6c714aea.js' id='googlesitekit-api-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-data-331da9d16065ff45d804.js' id='googlesitekit-data-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-datastore-forms-5dc3f4cf20255b0d6277.js' id='googlesitekit-datastore-forms-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-datastore-location-fd9ebf5e85ad1994751b.js' id='googlesitekit-datastore-location-js'></script>
      <script id='googlesitekit-entity-data-js-extra'>
         var _googlesitekitEntityData = {"currentEntityURL":"https:\/\/devcheatsheet.tk\/","currentEntityType":"blog","currentEntityTitle":"Home","currentEntityID":0};
      </script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-datastore-site-caa9d76c4ca31a351a13.js' id='googlesitekit-datastore-site-js'></script>
      <script id='googlesitekit-user-data-js-extra'>
         var _googlesitekitUserData = {"user":{"id":1,"email":"govinddeshmukh2001@gmail.com","name":"admin","picture":"https:\/\/lh3.googleusercontent.com\/a-\/AOh14GhaaHMXiycGMcBLopdDOM6Il081MvYem7PdarhdeQ=s100","roles":["administrator"]},"connectURL":"https:\/\/devcheatsheet.tk\/wp-admin\/index.php?action=googlesitekit_connect&nonce=24cb820324","initialVersion":"1.49.1","userInputState":"missing","verified":true,"permissions":{"googlesitekit_authenticate":true,"googlesitekit_setup":true,"googlesitekit_view_posts_insights":true,"googlesitekit_view_dashboard":true,"googlesitekit_view_module_details":true,"googlesitekit_manage_options":true}};
      </script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-datastore-user-421c5b5f8a670b4c727a.js' id='googlesitekit-datastore-user-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-datastore-ui-5854e9bfec15f31d3202.js' id='googlesitekit-datastore-ui-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-widgets-e78667880730160c9389.js' id='googlesitekit-widgets-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-adminbar-25d8f70d4f48bfe6b0b1.js' id='googlesitekit-adminbar-js' defer></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-modules-b5bb7cd96c45a99a80ed.js' id='googlesitekit-modules-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-modules-search-console-8bbed6837bb21562ff4f.js' id='googlesitekit-modules-search-console-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-modules-adsense-1c71d975bdab49cf690d.js' id='googlesitekit-modules-adsense-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-modules-analytics-0a0da5158d6cc23ec77a.js' id='googlesitekit-modules-analytics-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-modules-analytics-4-401fc38e524f3e9b4937.js' id='googlesitekit-modules-analytics-4-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-modules-pagespeed-insights-bfbd82958511173bc92a.js' id='googlesitekit-modules-pagespeed-insights-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-modules-optimize-3cded9ae8818db9eb479.js' id='googlesitekit-modules-optimize-js'></script>
      <script src='https://devcheatsheet.tk/wp-content/plugins/google-site-kit/dist/assets/js/googlesitekit-modules-tagmanager-e1b44804fee24b104068.js' id='googlesitekit-modules-tagmanager-js'></script>
   </body>
</html>

