<?php

/**
沿線スポット
 */
get_header();
?>

<section class="page-contents-event">
  <div class="page-contents-event-single-body">
		<h1><?php the_title(); ?></h1>
		<p class="kana"><?php the_field('kana'); ?></p>
		<div class="info">
			<div class="info-station"><?php the_field('near_st'); ?></div>
			<div class="info-time">
				<?php if(have_rows('near_how')): while(have_rows('near_how')): the_row(); ?>
				<?php the_sub_field('way'); ?><?php the_sub_field('time'); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		
		<div class="wrap">
			<?php if(have_rows('img_repeat')): ?>
			<div class="imgbox">
				<?php while(have_rows('img_repeat')): the_row(); ?>
				<figure>
					<img src="<?php the_sub_field('img'); ?>" alt="<?php the_title(); ?>">
				</figure>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			
			<div class="txtbox">
				<h2><?php the_field('head'); ?></h2>
				<p><?php the_field('txt'); ?></p>
				<table>
					<?php
						$date_s = eo_get_schedule_start();
						$dates = new DateTime($date_s);
						$date_e = eo_get_the_end();
						$datee = new DateTime($date_e);
						$week = array("日", "月", "火", "水", "木", "金", "土");
					?>
					<tr>
						<th>開催日</th>
						<td>
							<?php echo $dates->format('Y年n月j日'); ?>（<?php echo $week[(int)date_format($dates,'w')] ?>）〜<?php echo $datee->format('Y年n月j日'); ?>（<?php echo $week[(int)date_format($datee,'w')] ?>）
						</td>
					</tr>
					<?php if(get_field('add')): ?>
					<tr>
						<th>開催場所</th>
						<td><?php the_field('add'); ?></td>
					</tr>
					<?php endif; ?>
					<?php if(get_field('add_detail')): ?>
					<tr>
						<th>住所</th>
						<td><?php the_field('add_detail'); ?></td>
					</tr>
					<?php endif; ?>
					<?php if(get_field('url')): ?>
					<tr>
						<th>ホームページURL</th>
						<td><a href="<?php the_field('url'); ?>" target="_blank"><?php the_field('url'); ?></a></td>
					</tr>
					<?php endif; ?>
				</table>
			</div>
				
		</div>
		
		<?php echo do_shortcode('[eo_fullcalendar titleformatmonth="Y年n月のイベント" headerRight="prev,next" tooltip="false"]'); ?>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>