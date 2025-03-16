<?php

/**
記事 - 運行情報
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="news-contents-single">
      <div class="news-contents-single-body">
        <div class="date operation"><?php the_time('Y.m.j G:i'); ?> 更新</div>

        <h1><?php the_title(); ?></h1>
        <div class="post-area">
          <?php the_field('operation_cnt'); ?>
					<div class="operation-caution">
						<h3>ご利用上の注意</h3>
						<ol>
							<li>運行情報提供・更新には細心の注意を払っておりますが、実際の運行状況と異なる場合があります。情報は、あくまで目安としてお使い下さい。</li>
							<li>この情報に基づくお客様の判断により発生した損害に対して、当社では一切の責任を負いかねますので、あらかじめご了承下さい。</li>
							<li>この情報を無断で転載・複写または電磁媒体等に加工し、ホームページ等で公開することを固く禁じます。</li>
						</ol>
					</div>
        </div>
        <div class="back-area">
          <a href="/">トップページに戻る</a>
        </div>
      </div>
    </section>

<?php endwhile;
endif; ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>