<?php

/**
記事 - 新着情報
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="news-contents-single">
      <div class="news-contents-single-body">
        <?php
        $terms = get_the_terms($post->ID, 'newslist');
        foreach ($terms as $term) {
          if ($term) {
            echo '<div class="cat">';
            echo $term->name;
            echo '</div> ';
          }
        }
        ?>
        <div class="date"><?php the_time('Y.m.j'); ?></div>

        <h1><?php the_title(); ?></h1>
        <div class="post-area">
          <?php the_content(); ?>
        </div>
        <div class="back-area">
          <a href="/news">一覧に戻る</a>
        </div>
      </div>
    </section>

<?php endwhile;
endif; ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>