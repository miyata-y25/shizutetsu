<?php

/**
Template Name: 方面・平日休日の選択
Template Post Type: en

 */
get_header('en');
?>

<div class="sub-mainVisual">
<div class="sub-mainVisual-cnt">
<ol class="bread">
<li><a href="/en">HOME</a></li>
<li><a href="/en/timetable/timetable-station">Select Station</a></li>
<li><?php the_title(); ?></li>
</ol>
</div>
</div>

<div class="wrapper">
<div class="main-contents">

<section class="page-contents-timetable-day">
  <div class="page-contents-timetable-day-body">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer('en'); ?>