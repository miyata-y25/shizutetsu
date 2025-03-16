<?php

/**

 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/css/base.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/css/component.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/css/page.css">
  <?php if (is_front_page() || is_home()) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shared/js/lib/slick/slick.css">
  <?php elseif (get_post_type() === 'timetables') : ?>
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

<body>
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
              <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/head-logo.svg" alt="静鉄電車"></a>
            </h1>
          </div>
          <div class="menu">
            <div class="link">
              <ul>
                <li><a href="/contact" class="ico01"><span>お問い合わせ</span></a></li>
                <li><a href="/en" class="ico02"><span>English</span></a></li>
              </ul>
            </div>
            <div class="sns">
              <ul>
                <li class="multi">
                  <span class="x-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-x.svg" alt="X"></span>
                  <div class="x-list">
                    <a href="https://twitter.com/shizutetsu_pr" target="_blank">運行情報はこちら</a>
                    <a href="https://twitter.com/ShizutetsuEvent" target="_blank">イベント情報はこちら</a>
                  </div>
                </li>
                <li><a href="https://www.facebook.com/shizutetsudensya/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-fb.svg" alt="facebook"></a></li>
                <li><a href="https://www.instagram.com/shizutetsu_railway/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-ig.svg" alt="Instagram"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="site-header__box2">
        <div class="site-header__box__cnt">
          <dl>
            <dt>運行情報</dt>
						<?php
							$i = 1;
							$args = array(
								'post_type' => 'operation',
								'posts_per_page' => 1,
								'order' => 'DESC',  //昇順 or 降順の指定
								'orderby' => 'date',  //何順で並べるかの指定
							);
							query_posts($args);
							if (have_posts()) :
						?>
						<?php while (have_posts()) : the_post(); ?>
						<dd class="caution">
							<?php the_title(); ?>
						</dd>
						<?php endwhile;
						else : ?>
						<dd>
							静鉄電車は通常どおり運行しております。
						</dd>
						<?php endif; ?>
          </dl>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="sp-aco"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down-wh.svg" alt=""></div>
          <ul>
            <li><a href="<?php the_permalink(); ?>">運行情報詳細</a></li>
            <!-- li><a href="/emg">遅延証明</a></li -->
          </ul>
					<?php endwhile; endif; ?>
					<?php
						wp_reset_postdata();
						wp_reset_query();
					?>
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
            <li><a href="/timetable/timetable-station">時刻表</a></li>
            <li><a href="/fare">運賃</a></li>
            <li><a href="/timetable/timetable-station">各駅情報</a></li>
            <li><a href="/ticket">定期・お得なきっぷ・ICカード</a></li>
            <li><a href="/news/20231024/2851">手回り品について</a></li>
            <li><a href="/#events">沿線案内・マップ</a></li>
          </ul>
        </nav>
      </div>

    </div>

  </header>

  <?php if (is_front_page() || is_home()) : ?>
    <div class="top-mainVisual">
    <?php if (have_rows('home_slides', 2)) : ?>
      <?php while (have_rows('home_slides', 2)) : the_row(); ?>
        <div class="top-mainVisual-cnt">
          <?php if(get_sub_field('slides_link')): ?>
          <a href="<?php the_sub_field('slides_link'); ?>" target="_blank"><img src="<?php the_sub_field('slides_img'); ?>" alt=""></a>
          <?php else : ?>
          <img src="<?php the_sub_field('slides_img'); ?>" alt="">
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div><!-- top-mainVisual -->
  <?php elseif (is_page('4592')) : //特設ページ用 ?>
  <?php else : ?>
    <div class="sub-mainVisual">
      <div class="sub-mainVisual-cnt">
        <ol class="bread">
          <!-- パンくず -->
          <?php
          $parent_id = $post->post_parent; // 親ページのIDを取得
          $parent_title = get_post($parent_id)->post_title; // 親ページのタイトルを取得
          ?>
          <li><a href="/">ホーム</a></li>
          <?php if (is_front_page() ||  is_home()) : ?>
          <?php elseif (is_archive() || is_category()) : ?>
            <li><?php echo get_the_archive_title(); ?></li>
          <?php elseif (get_post_type() === 'news') : ?>
            <li><a href="/news/">お知らせ</a></li>
            <li><?php the_title(); ?></li>
          <?php elseif (get_post_type() === 'sustainability') : ?>
            <li><a href="/sustainability/">サステナビリティ</a></li>
            <li><?php the_title(); ?></li>
          <?php elseif (get_post_type() === 'spot') : ?>
            <li><a href="/spot/">沿線スポット</a></li>
            <li><?php the_title(); ?></li>
          <?php elseif (is_tax('spottag')) : ?>
            <li><a href="/spot/">沿線スポット</a></li>
            <li><?php single_term_title(); ?></li>
          <?php elseif (get_post_type() === 'station') : ?>
            <li><a href="/timetable/timetable-station">各駅情報</a></li>
            <li><?php the_title(); ?></li>
          <?php elseif (get_post_type() === 'timetables') : ?>
            <li><?php echo $parent_title; ?></li>
            <li>時刻表｜<?php the_title(); ?></li>
          <?php elseif (is_404()) : ?>
            <li>404 Page Not Found.</li>
          <?php else : ?>
            <li><?php the_title(); ?></li>
          <?php endif; ?>
        </ol>
        <!-- タイトル -->
        <?php if (get_post_type() === 'news' || get_post_type() === 'sustainability' || get_post_type() === 'spot' || get_post_type() === 'station' || get_post_type() === 'timetables' || get_post_type() === 'operation' || get_post_type() === 'events') : ?>
          <?php if (is_tax('spottag')) : ?>
            <h1><?php single_term_title(); ?></h1>
          <?php endif; ?>
        <?php elseif (get_post_type() === 'emg') : ?>
          <h1>遅延証明書</h1>
        <?php elseif (get_post_type() === 'event') : ?>
          <h1>静鉄沿線イベント情報</h1>
        <?php elseif (is_single()) : ?>
          <h1><?php echo get_the_archive_title('', false); ?></h1>
        <?php else : ?>
          <h1><?php single_post_title(); ?></h1>
        <?php endif; ?>
      </div>
    </div><!-- sub-mainVisual -->
  <?php endif; ?>

  <?php if (is_page('4592')) : //特設ページ用 ?>
  <div class="wrapper special">
  <?php else : ?>
  <div class="wrapper">
  <?php endif; ?>

    <div class="main-contents">