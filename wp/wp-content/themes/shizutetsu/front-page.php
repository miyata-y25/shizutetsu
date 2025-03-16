<?php

/**

 */
get_header();
?>

<section class="top-contents-menu">
  <div class="top-contents-menu-body">
    <div class="top-contents-menu-list">
      <ul>
        <li>
          <a href="/timetable/timetable-station">
            <div class="ico">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/menu-img01.svg" alt="Timetable">
            </div>
            <p>時刻表<span>を調べる</span></p>
            <span class="en">Timetable</span>
          </a>
        </li>
        <li>
          <a href="/fare">
            <div class="ico">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/menu-img02.svg" alt="Fare Table">
            </div>
            <p>運賃<span>を調べる</span></p>
            <span class="en">Fare Table</span>
          </a>
        </li>
        <li>
          <a href="/timetable/timetable-station">
            <div class="ico">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/menu-img03.svg" alt="Route Chart">
            </div>
            <p>路線図<span>・各駅案内</span></p>
            <span class="en">Route Chart</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="top-contents-news">
  <div class="top-contents-news-body">
    <div class="top-contents-news-tit">
      <h2>新着情報</h2>
      <div class="link"><a href="/news">一覧を見る</a></div>
    </div>
    <div class="top-contents-news-tab">
      <ul>
        <?php
        $i = 1;
        wp_reset_query();
        $args = array(
          'post_type' => 'news',
          //'showposts' => 5,
          'order' => 'DESC',  //昇順 or 降順の指定
          'orderby' => 'date',  //何順で並べるかの指定
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
                      echo '<div class="cat ' . $term->slug . '">';
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
        ?>
        <?php wp_reset_query(); ?>
      </ul>
      <div class="sp-link"><a href="/news">一覧を見る</a></div>
    </div>
  </div>
</section>

<section class="top-contents-route">
  <div class="top-contents-route-body">
    <div class="top-contents-route-tit">
      <h2>路線図</h2>
    </div>
    <div class="top-contents-route-list">
      <ul>
        <li><a href="/station/shin-shizuoka"><span class="sn">S01</span><span class="tit">新静岡</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/hiyoshicho"><span class="sn">S02</span><span class="tit">日吉町</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/otowacho"><span class="sn">S03</span><span class="tit">音羽町</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/kasugacho"><span class="sn">S04</span><span class="tit">春日町</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/yunoki"><span class="sn">S05</span><span class="tit">柚木</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/naganuma"><span class="sn">S06</span><span class="tit">長沼</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/furusho"><span class="sn">S07</span><span class="tit">古庄</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/prefsportspark"><span class="sn">S08</span><span class="tit">県総合運動場</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/prefartmuseum"><span class="sn">S09</span><span class="tit">県立美術館前</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/kusanagi"><span class="sn">S10</span><span class="tit">草薙</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/mikadodai"><span class="sn">S11</span><span class="tit">御門台</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/kitsunegasaki"><span class="sn">S12</span><span class="tit">狐ケ崎</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/sakurabashi"><span class="sn">S13</span><span class="tit">桜橋</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/irieoka"><span class="sn">S14</span><span class="tit">入江岡</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
        <li><a href="/station/shin-shimizu"><span class="sn">S15</span><span class="tit">新清水</span>
            <div class="tooltip"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tooltip01.svg" alt="運賃・時刻表を見る"></div>
          </a></li>
      </ul>
    </div>
  </div>
</section>

<div class="bnr-area">
  <ul class="list">
    <li><a href="/specialtrain"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-01.png" alt="特別装飾ラッピングトレイン運行情報"></a></li>
    <li><a href="/news/20211116/1356"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-02.png" alt="静鉄電車グッズオンラインショップ"></a></li>
    <li><a href="/project"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-03.png" alt="静岡県立大学×静岡鉄道共同プロジェクト"></a></li>
    <li><a href="/sustainability"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-04.png" alt="サステナビリティ情報"></a></li>
    <!-- li><a href="/uchiden"><img src="https://train.shizutetsu.co.jp/wp-content/uploads/2024/11/bnr-uchiden.jpg" alt="うちっちでんしゃ！～うちっちの太陽光でんきで走る、静鉄電車～"></a></li -->
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
  </ul>
</div>

<section class="top-contents-spot">
  <div class="top-contents-spot-body">
    <div class="top-contents-spot-tit">
      <h2>沿線スポットアクセス</h2>
    </div>
    <div class="top-contents-spot-list">
      <ul>
        <?php
        $i = 1;
        wp_reset_query();
        $args = array(
          'post_type' => 'spot',
          'posts_per_page' => 6,
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
        <?php wp_reset_query(); ?>
      </ul>
    </div>
  </div>
</section>

<div class="bnr-area">
  <ul class="list">
    <li><a href="/spot/"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-06.svg" alt=""></a></li>
    <li><a href="/wp-content/themes/shizutetsu/guide_240424.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-08.svg" alt=""></a></li>
		<?php
		//タクソノミーのタームに設定したバナーを出力
		$terms = get_terms(array(
			'taxonomy' => 'spottag',
			'hide_empty' => false,
		));

		if (!empty($terms) && !is_wp_error($terms)) {
			foreach ($terms as $term) {
				$display = get_field('display', $term);

				if ($display) {
					$custom_field_value = get_field('spot_bnr', $term);
					$term_link = get_term_link($term);
					echo '<li><a href="' . esc_url($term_link) . '"><img src="' . $custom_field_value . '" alt=""></a></li>';
				}
			}
		}
		?>
    <!--
    <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-05.png" alt=""></a></li>
    <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bnr-07.png" alt=""></a></li>
		-->
  </ul>
</div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>