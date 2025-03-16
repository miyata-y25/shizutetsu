<?php

/**
新型車両A3000形・ラッピングトレイン
 */
get_header();
?>

<section class="page-contents-specialtrain">
  <div class="page-contents-specialtrain-body">
		
		<!-- h2>1000形車両・ラッピングトレイン運行予定</h2 -->
		<p><!--1000形車両や、-->特別な装飾のラッピングトレインの運行予定をご案内します。</p>
		<div class="box">
			<h3>ご注意</h3>
			<ul>
				<li>運行予定は随時更新しますが、点検・整備の都合上、変更となる場合があります。</li>
				<li>この情報に基づくお客様の判断により発生した損害に対して、当社では一切の責任を負いかねますので、あらかじめご了承下さい。</li>
				<li>この情報を無断で転載・複写または電磁媒体等に加工し、ホームページ等で公開することを固く禁じます。</li>
			</ul>
			<h3>お問い合わせ</h3>
			<p>静岡鉄道㈱鉄道部　運転運輸営業所<br>054-261-6981</p>
		</div>
		
		<?php if(have_rows('news')): ?>
		<section class="news">
			<h3>お知らせ</h3>
      <ul>
				<?php while(have_rows('news')): the_row(); ?>
				<li>
					<time><?php the_sub_field('news_date'); ?></time>
					<p><?php the_sub_field('news_cnt'); ?></p>
				</li>
        <?php endwhile; ?>
      </ul>
		</section>
		<?php endif; ?>
		
		<?php if( have_rows('layout') ): ?>
		<section class="cnt">
		<?php while ( have_rows('layout') ) : the_row(); ?>

			<?php if( get_row_layout() == 'head1' ): //大見出し ?>
			<h2>
				<?php the_sub_field('acf_head1'); ?>
			</h2>

			<?php elseif( get_row_layout() == 'lead' ): //リード文 ?>
			<p>
				<?php the_sub_field('acf_lead'); ?>
			</p>
		
			<?php elseif( get_row_layout() == 'head2' ): //小見出し ?>
			<h3>
				<?php the_sub_field('acf_head2'); ?>
			</h3>
		
			<?php elseif( get_row_layout() == 'schedule' ): //運行表 ?>
			<ul>
				<?php if( have_rows('acf_schedule') ): while( have_rows('acf_schedule') ): the_row(); ?>
				<li>
					<a href="<?php the_sub_field('acf_schedule_file'); ?>" target="_blank">
						<?php the_sub_field('acf_schedule_date'); ?>
					</a>
				</li>
				<?php endwhile; endif; ?>
			</ul>
			<?php endif; ?>
		
		<?php endwhile; ?>
		</section>
		<?php endif; ?>


  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>