<?php

/**
該当駅の運賃表示
 */
get_header();
?>

<section class="page-contents-station-single">
  <div class="page-contents-station-single-body">

    <div class="page-contents-station-single-phase">
      <ul>
        <li class="current">乗車駅選択</li>
        <li>降車駅選択</li>
        <li>運賃一覧</li>
      </ul>
    </div>

    <h2>運賃一覧<span class="en">Fares List</span></h2>
    <h3>現在のルート</h3>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

    <!-- 
    <div class="page-contents-station-single-route">
      <ul>
        <li>
          <div class="sn"><span>S01</span></div>
          <div class="tit">新静岡</div>
          <div class="en">Shin-Shizuoka</div>
        </li>
        <li>
          <div class="sn"><span>S08</span></div>
          <div class="tit">県総合運動場</div>
          <div class="en">Pref. Sports Park</div>
        </li>
      </ul>
    </div>
    <h3>運賃</h3>
    <div class="page-contents-station-single-fare">
      <dl>
        <dt>普通旅客運賃<span class="en">Fare</span></dt>
        <dd class="full">¥000</dd>
        <dt>通勤定期券（1ヶ月）<span class="en">Commuter Pass 1month</span></dt>
        <dd>¥0,000</dd>
        <dt>通勤定期券（3ヶ月）<span class="en">Commuter Pass 3month</span></dt>
        <dd>¥0,000</dd>
        <dt>通勤定期券（6ヶ月）<span class="en">Commuter Pass 6month</span></dt>
        <dd>¥0,000</dd>
      </dl>
    </div> -->

    <div class="btn">
      <a href="">検索トップへ戻る<span class="en">Back</span></a>
    </div>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>