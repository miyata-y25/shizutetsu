<?php

/**
新着情報すべて
 */
get_header();
?>

<section class="news-contents">
  <div class="news-contents-body">
    <div class="news-contents-tabmenu">
      <ul>
        <li class="current"><a href="/archives/news">すべて</a></li>
        <li><a href="/newslist/important">重要なおしらせ</a></li>
        <li><a href="/newslist/news">お知らせ</a></li>
        <li><a href="/newslist/event">イベント情報</a></li>
        <li><a href="/newslist/other">その他</a></li>
      </ul>
    </div>
    <div class="news-contents-list">
      <ul>
        <?php
        $i = 1;
        wp_reset_query();
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => 10,
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
                  <?php
                  $terms = get_the_terms($post->ID, 'newslist');
                  foreach ($terms as $term) {
                    if ($term) {
                      echo '<div class="cat '. $term->slug .'">';
                      echo $term->name;
                      echo '</div> ';
                    }
                  }
                  ?>
                  <div class="date"><?php echo get_the_time('Y.m.d'); ?></div>
                  <h3><?php the_title(); ?></h3>
                </div>
              </a>
            </li>
        <?php
          endwhile;
        endif;
				wp_reset_postdata();
        ?>

        <?php wp_reset_query(); ?>

        <!-- pagevavi -->
        <?php
        if (function_exists('wp_pagenavi')) wp_pagenavi();
        wp_reset_postdata();
        ?>

      </ul>

    </div>
  </div>
</section>

<?php get_footer(); ?>