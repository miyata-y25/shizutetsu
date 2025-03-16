<?php

/**
Template Name: 該当駅の運賃表示
 */
get_header();
?>

<section class="page-contents-station-single">
  <div class="page-contents-station-single-body">

    <div class="page-contents-station-single-phase">
      <ul>
        <li class="before">乗車駅選択</li>
        <li class="next">降車駅選択</li>
        <li class="current">運賃一覧</li>
      </ul>
    </div>

    <?php get_template_part('fare-info'); ?>

  </div>
</section>

<?php get_footer(); ?>