<?php

/**
沿線スポット - タグ
 */
get_header();
?>

<section class="page-contents-spot">
  <div class="page-contents-spot-body">

    <div class="img-bnr">
      <img src="
    <?php
    $term = get_queried_object();
    $custom_field_value = get_field('spot_bnr', $term);
    echo $custom_field_value;
    ?>
    " alt="">
    </div>

    <ul>
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <figure>
                <?php the_post_thumbnail('full'); ?>
              </figure>
              <div class="txt">
                <h3><?php echo get_the_title(); ?></h3>
								<p>
									<?php
									if(mb_strlen(get_field('comment'))>80){
										$text= mb_substr(strip_tags(get_field('comment')), 0, 80);
										echo $text.'…';
									}else{
										echo strip_tags(get_field('comment'));
									}
									?>
								</p>
              </div>
              <div class="info">
                <div class="info-station"><?php the_field('near_st'); ?></div>
                <?php if (have_rows('near_how')) : while (have_rows('near_how')) : the_row(); ?>
                    <?php
                    $way = get_sub_field('way');
                    $wayValue = $way['value'];
                    $wayLabel = $way['label'];
                    ?>
                    <div class="info-time <?php echo $wayValue; ?>">
                      <?php echo $wayLabel; ?><?php the_sub_field('time'); ?>
                    </div>
                <?php endwhile;
                endif; ?>
              </div>
            </a>
          </li>
      <?php endwhile;
      endif; ?>
    </ul>

    <?php
    if (function_exists('wp_pagenavi')) wp_pagenavi();
    wp_reset_postdata();
    ?>

    <?php wp_reset_query(); ?>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>