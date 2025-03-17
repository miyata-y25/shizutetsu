<?php

/**
Template Name: 方面・平日休日の選択
Template Post Type: station

 */
get_header();
?>

<section class="page-contents-timetable-day">
  <div class="page-contents-timetable-day-body">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>