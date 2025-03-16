<?php

/**
沿線スポット
 */
get_header();
?>

<section class="page-contents-event">
  <div class="page-contents-event-body">
		
		<?php echo do_shortcode('[eo_fullcalendar titleformatmonth="Y年n月のイベント" headerRight="prev,next" tooltip="false"]'); ?>
		
		<ul>
			<?php
			$i = 1;
			wp_reset_query();
			$args = array(
				'post_type' => 'event',
				'posts_per_page' => 9,
				'event_start_after'=>'tomorrow',
				'paged' => $paged,
			);
			query_posts($args);
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
						<p><?php echo mb_substr(get_field('txt'),0,50); ?></p>
						<?php
							$id = get_the_ID();
							$categories = wp_get_post_terms($id, 'event-category');
							foreach ( $categories as $category ) {
								$color = esc_attr($category->color);
								echo '<div class="cat" style="background-color: ' . $color . '">' . $category->name . '</div>';
							}
						?>
					</div>
					<div class="schedule">
						<span class="yearmonth"><?php echo eo_get_schedule_start('Y.n'); ?></span>
						<span class="day"><?php echo eo_get_schedule_start('j'); ?></span>
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

<?php get_footer(); ?>