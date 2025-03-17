<?php
/**
Template Name: 時刻表・駅情報（駅を選択）
Template Post Type: en
 */
get_header('en');
?>

<div class="sub-mainVisual">
<div class="sub-mainVisual-cnt">
<ol class="bread">
<li><a href="/en">HOME</a></li>
<li>Select Station</li>
</ol>
<h1>Select Station</h1>
</div>
</div>

<div class="wrapper">
<div class="main-contents">

<section class="page-contents-timetable-station">
  <div class="page-contents-timetable-station-body">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer('en'); ?>