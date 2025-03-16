<?php

/**
Template Name: 駅情報
Template Post Type: station
 */
get_header();
?>

<section class="page-contents-timetable">
  <div class="page-contents-timetable-body">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

    <div class="btn btn-search">
      <a href="/fare">運賃検索<span class="en">fares Search</span></a>
    </div>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>