<?php
/**
Template Name: 時刻表・駅情報（駅を選択）
Template Post Type: station
 */
get_header();
?>

<section class="page-contents-timetable-station">
  <div class="page-contents-timetable-station-body">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>