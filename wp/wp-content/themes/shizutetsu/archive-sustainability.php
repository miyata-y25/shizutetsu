<?php

/**
サスティナビリティ
 */
get_header();
?>

<section class="news-contents">
  <div class="news-contents-body">
    <div class="news-contents-list">
      <ul>
        <?php
        $i = 1;
        wp_reset_query();
        $args = array(
          'post_type' => 'sustainability',
          'posts_per_page' => 3,
          'order' => 'DESC',  //昇順 or 降順の指定
          'orderby' => 'date',  //何順で並べるかの指定
          'paged' => $paged,
        );
        query_posts($args);
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <div class="cnt">
                  <div class="date"><?php echo get_the_time('Y.m.d'); ?></div>
                  <h3><?php the_title(); ?></h3>
                </div>
              </a>
            </li>
        <?php
          endwhile;
        endif;
        ?>

        <!-- pagevavi -->
        <?php
        if (function_exists('wp_pagenavi')) wp_pagenavi();
        wp_reset_postdata();
        ?>

        <?php wp_reset_query(); ?>

      </ul>

    </div>
  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>