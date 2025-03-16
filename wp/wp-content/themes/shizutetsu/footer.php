<?php

/**

 */
?>

<?php if (is_front_page() ||  is_home()) : ?>
<?php elseif (is_page('4592')) : //特設ページ用 ?>
<?php else : ?>
  <div class="bnr-area bnr-area-sub">
    <ul class="list">
			<?php
			$i = 1;
			wp_reset_query();
			$args = array(
				'post_type' => 'events',
				'posts_per_page' => 1,
			);
			query_posts($args);
			if (have_posts()) :
				while (have_posts()) : the_post();
			?>
			<li class="full" id="events"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-event.png" alt="静鉄沿線イベント情報"></a></li>
			<?php endwhile;
			endif; ?>
			<?php wp_reset_query(); ?>
			<li><a href="/specialtrain"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-01.png" alt="特別装飾ラッピングトレイン運行情報"></a></li>
			<li><a href="/news/20211116/1356"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-02.png" alt="静鉄電車グッズオンラインショップ"></a></li>
			<li><a href="/project"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-03.png" alt="静岡県立大学×静岡鉄道共同プロジェクト"></a></li>
			<li><a href="/sustainability"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-04.png" alt="サステナビリティ情報"></a></li>
			<!-- li><a href="/uchiden"><img src="https://train.shizutetsu.co.jp/wp-content/uploads/2024/11/bnr-uchiden.jpg" alt="うちっちでんしゃ！～うちっちの太陽光でんきで走る、静鉄電車～"></a></li -->
    </ul>
  </div>
<?php endif; ?>

<?php if (!is_page('4592')) : //特設ページ用 ?>
<div class="bnr-s-area">
  <ul class="list">
    <?php if (have_rows('bnr_group', 2)) : ?>
      <?php while (have_rows('bnr_group', 2)) : the_row(); ?>
        <li><a href="<?php the_sub_field('url'); ?>" target="_blank"><img src="<?php the_sub_field('bnr_img'); ?>" alt=""></a></li>
      <?php endwhile; ?>
    <?php endif; ?>
  </ul>
</div>
<?php endif; ?>

</div><!-- main-contents -->

</div><!-- wrapper -->

<footer class="site-footer" id="footer">

  <div class="scroll-top">
    <button id="scroll-top"></button>
  </div>

  <div class="site-footer__btm">
    <div class="site-footer__btm__body">
      <div class="tit">
        <p><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.svg" alt="静鉄電車"></a></p>
      </div>
      <div class="fnav01">
        <ul>
          <li><a href="/timetable/timetable-station" class="ico01">時刻表を調べる</a></li>
          <li><a href="/fare" class="ico02">運賃を調べる</a></li>
          <li><a href="/timetable/timetable-station" class="ico03">路線図・各駅案内</a></li>
        </ul>
      </div>
      <div class="fnav02">
        <ul>
          <li><a href="/ticket#teiki">通学定期券の購入</a></li>
          <li><a href="/ticket#teiki">通勤定期券の購入</a></li>
          <li><a href="/ticket">定期・お得なきっぷ・ICカード</a></li>
          <li><a href="/#events">沿線案内・マップ</a></li>
        </ul>
      </div>
      <div class="fnav03">
        <ul>
          <li><a href="/contact">お問い合わせ</a></li>
					<li><a href="/sustainability">サスティナビリティ情報</a></li>
          <li><a href="https://www.shizutetsu.co.jp/safetyreport" target="_blank">安全報告書</a></li>
          <li><a href="/yakkan">運送約款</a></li>
          <li><a href="/earthquake">地震に係る列車運行</a></li>
          <li><a href="https://train.shizutetsu.co.jp/wp-content/uploads/2024/11/被害者等支援計画.pdf" target="_blank">被害者等支援計画</a></li>
          <li><a href="/construction">線路接近工事安全対策のお願い</a></li>
          <li><a href="https://www.shizutetsu.co.jp/privacypolicy" target="_blank">プライバシーポリシー</a></li>
          <li><a href="/sitemap">サイトマップ</a></li>
        </ul>
      </div>
      <div class="copy">
        Copyright © 2023 Shizuoka Railway All Rights Reserved.
      </div>
    </div>
  </div>
	
	<div class="fixed-social">
		<ul>
      <li class="multi">
        <span class="x-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-x.svg" alt="X"></span>
        <div class="x-list">
          <a href="https://twitter.com/shizutetsu_pr" target="_blank">運行情報はこちら</a>
          <a href="https://twitter.com/ShizutetsuEvent" target="_blank">イベント情報はこちら</a>
        </div>
      </li>
			<li><a href="https://www.facebook.com/shizutetsudensya/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-fb.svg" alt="facebook"></a></li>
			<li><a href="https://www.instagram.com/shizutetsu_railway/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-ig.svg" alt="Instagram"></a></li>
		</ul>
	</div>

</footer>

<?php wp_reset_query(); ?>

<!-- ============================================================================================== -->

<!-- js -->
<script src="<?php echo get_template_directory_uri(); ?>/shared/js/lib/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/shared/js/common.js"></script>
<?php if (is_front_page() || is_home()) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/shared/js/lib/slick/slick.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $(".top-mainVisual").slick({
        fade: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4500,
        dots: true,
        speed: 1500,
      });
    });
  </script>
<?php elseif (get_post_type() === 'timetables') : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/shared/js/lib/modaal/modaal.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $(".ad_times").modaal();
      return false;
    });
  </script>
<?php endif; ?>


<?php wp_footer(); ?>
</body>

</html>