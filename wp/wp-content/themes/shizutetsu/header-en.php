<?php

/**

 */
?>
<!doctype html>
<html lang="en">

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/css/base.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/css/component.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/css/page.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/css/en.css">
  <?php if (get_post_type() === 'timetables') : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/js/lib/modaal/modaal.min.css">
  <?php endif; ?>
	
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">	

  <!-- GA -->
	<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-44447954-1']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
	</script>
	
	<!-- Google Tag Manager 20230331 -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W4T6D3F');</script>
	<!-- End Google Tag Manager -->

  <?php wp_head(); ?>

</head>

<body class="en">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZWMZKZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) 20230331 -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4T6D3F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
  <!-- ============================================================================================== -->

  <header class="site-header">

    <div class="site-header__wrapper">

      <div class="site-header__box1">
        <div class="site-header__box__cnt">
          <div class="logo">
            <h1>
              <a href="/en"><img src="<?php echo get_template_directory_uri(); ?>/images/head-logo_en.svg" alt="Shizutetsu Railway"></a>
            </h1>
          </div>
          <div class="menu">
            <div class="link">
              <ul>
                <li><a href="/" class="ico02"><span>Japanese</span></a></li>
              </ul>
            </div>
            <div class="sns">
              <ul>
                <li class="multi">
                  <span class="x-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-x.svg" alt="X"></span>
                  <div class="x-list">
                    <a href="https://twitter.com/shizutetsu_pr" target="_blank">Operation Info</a>
                    <a href="https://twitter.com/ShizutetsuEvent" target="_blank">Upcoming Events</a>
                  </div>
                </li>
                <li><a href="https://www.facebook.com/shizutetsudensya/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-fb.svg" alt="facebook"></a></li>
                <li><a href="https://www.instagram.com/shizutetsu_railway/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-ig.svg" alt="Instagram"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="site-header__box3">
        <a class="site-header__toggle" href="javascript:;">
          <span></span>
          <span></span>
          <span></span>
        </a>
        <nav class="site-header__nav">
          <ul class="list">
            <li><a href="/en/timetable/timetable-station">Timetables</a></li>
            <li><a href="/en/fare">Fare Table</a></li>
            <li><a href="/en/timetable/timetable-station">Station Info</a></li>
          </ul>
        </nav>
      </div>

    </div>

  </header>