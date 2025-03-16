<?php

/**
運賃検索（乗降駅を選択）
 */

// 運賃計算 jQuery読み込み
function fare_scripts_method() {
  wp_enqueue_script( 'fare-fare', get_template_directory_uri() . '/js/fare-station.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'fare_scripts_method' );

get_header();
?>

<section class="page-contents-station-single">
  <div class="page-contents-station-single-body">

    <div class="page-contents-station-single-phase">
      <ul>
        <li class="before">乗車駅選択</li>
        <li class="current">降車駅選択</li>
        <li class="next">運賃一覧</li>
      </ul>
    </div>

    <h2>02 降車駅を選択してください</h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

    <!-- 
    <div class="page-contents-station-single-list">
      <ul>
        <li><a href="">
            <div class="sn"><span>S01</span></div>
            <div class="tit">新静岡</div>
            <div class="en">Shin-Shizuoka</div>
          </a></li>
        <li><a href="">
            <div class="sn"><span>S08</span></div>
            <div class="tit">県総合運動場</div>
            <div class="en">Pref. Sports Park</div>
          </a></li>
      </ul>
    </div> -->

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>