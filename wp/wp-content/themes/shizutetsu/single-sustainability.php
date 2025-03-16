<?php

/**
記事 - サスティナビリティ
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="news-contents-single">
      <div class="news-contents-single-body">
        <div class="date"><?php the_time('Y.m.j'); ?></div>

        <h1><?php the_title(); ?></h1>
        <div class="post-area">
          <?php the_content(); ?>
        </div>
        <div class="back-area">
          <a href="/sustainability">一覧に戻る</a>
        </div>
      </div>
    </section>

<?php endwhile;
endif; ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>