<?php

/**
Template Name: 運賃検索（降車駅を選択）
Template Post Type: en
 */

// 運賃計算 jQuery読み込み
function fare_scripts_method() {
  wp_enqueue_script( 'fare-fare', get_template_directory_uri() . '/js/fare-station.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'fare_scripts_method' );

get_header('en');
?>

<div class="sub-mainVisual">
<div class="sub-mainVisual-cnt">
<ol class="bread">
<li><a href="/en">HOME</a></li>
<li>Fare</li>
</ol>
<h1>Fare Table</h1>
</div>
</div>

<div class="wrapper">
<div class="main-contents">

<section class="page-contents-station-single">
  <div class="page-contents-station-single-body">

    <div class="page-contents-station-single-phase">
      <ul>
        <li class="before">Departure Station</li>
        <li class="current">Arrival Station</li>
        <li class="next">Fare Table</li>
      </ul>
    </div>

    <h2>02 Choose Arrival Station</h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

    <!-- 
    <div class="page-contents-station-single-list">
      <ul>
        <li><a href="">
            <div class="sn"><span>S01</span></div>
            <div class="tit">新静岡</div>
            <div class="en">Shin-Shizuoka</div>
          </a></li>
        <li><a href="">
            <div class="sn"><span>S08</span></div>
            <div class="tit">県総合運動場</div>
            <div class="en">Pref. Sports Park</div>
          </a></li>
      </ul>
    </div> -->

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer('en'); ?>