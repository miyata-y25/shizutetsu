<?php

/**

 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post();
	$imgGroup = get_field('img_group');
?>
    <section class="news-contents-single">
      <div class="news-contents-single-body">
        <h1><?php the_title(); ?></h1>
        <div class="post-area">
          <?php the_content(); ?>
					<?php if(have_rows('event_repeat')): ?>
					<figure class="wp-block-table">
						<table class="events">
							<tr>
								<th>イベント名</th>
								<th>開催日</th>
								<th>最寄り駅</th>
								<th>公式HP等</th>
							</tr>
						<?php while(have_rows('event_repeat')): the_row(); ?>
							<tr>
								<td class="events_name"><?php the_sub_field('name'); ?></td>
								<td><span class="sp">開催日：</span><?php the_sub_field('date'); ?></td>
								<td><span class="sp">最寄り駅：</span><?php the_sub_field('station'); ?></td>
								<td><a href="<?php the_sub_field('link'); ?>" target="_blank">外部サイトへ</a></td>
							</tr>
						<?php endwhile; ?>
						</table>
					</figure>
					<?php endif; ?>
					<p>その他のイベントは、外部サイト「静岡市まちは劇場」からもご確認できます。<br>
					<a href="https://shizuoka.life/" target="_blank">外部サイト「静岡市まちは劇場」</a></p>
					<figure>
						<a href="<?php echo $imgGroup['pdf']; ?>" target="_blank"><img src="<?php echo $imgGroup['img']; ?>" alt=""></a>
					</figure>
        </div>
      </div>
    </section>
<?php endwhile;
endif; ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>