<?php

/**
沿線スポット
 */
get_header();
?>

<section class="page-contents-spot">
  <div class="page-contents-spot-single-body">
		<h1><?php the_title(); ?></h1>
		<p class="kana"><?php the_field('ttl_kana'); ?></p>
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
				<p><?php the_field('comment'); ?></p>
				<table>
					<?php if(have_rows('tel_group')): ?>
					<?php while( have_rows('tel_group') ): the_row(); ?>
					<tr>
						<th>電話番号</th>
						<td><?php the_sub_field('tel'); ?><br><?php the_sub_field('tel_caution'); ?></td>
					</tr>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php if(get_field('add')): ?>
					<tr>
						<th>住所・所在地</th>
						<td><?php the_field('add'); ?></td>
					</tr>
					<?php endif; ?>
					<?php if(have_rows('time_group')): ?>
					<?php while( have_rows('time_group') ): the_row(); ?>
					<?php if(get_sub_field('time')): ?>
					<tr>
						<th>営業時間</th>
						<td><?php the_sub_field('time'); ?><br><?php the_sub_field('time_caution'); ?></td>
					</tr>
					<?php endif; ?>
					<?php if(get_sub_field('close')): ?>
					<tr>
						<th>定休日</th>
						<td><?php the_sub_field('close'); ?></td>
					</tr>
					<?php endif; ?>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php if(get_field('price')): ?>
					<tr>
						<th>料金等</th>
						<td><?php the_field('price'); ?></td>
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
		
		<div class="other">
			<h2>その他の沿線スポット</h2>
			<ul>
				<?php
				$i = 1;
				wp_reset_query();
				$args = array(
					'post_type' => 'spot',
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
						<figure>
							<?php the_post_thumbnail('full'); ?>
						</figure>
						<div class="txt">
							<h3><?php echo get_the_title(); ?></h3>
							<p><?php the_field('comment'); ?></p>
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
		</div>		

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>