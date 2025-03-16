<?php

/**
Template Name: 該当駅の運賃表示
Template Post Type: en
 */
get_header('en');
?>

<div class="sub-mainVisual">
<div class="sub-mainVisual-cnt">
<ol class="bread">
<li><a href="/en">HOME</a></li>
<li>Fare</li>
</ol>
<h1>Fare Table</h1>
</div>
</div>

<div class="wrapper">
<div class="main-contents">

<section class="page-contents-station-single">
  <div class="page-contents-station-single-body">

    <div class="page-contents-station-single-phase">
      <ul>
        <li class="before">Departure Station</li>
        <li class="next">Arrival Station</li>
        <li class="current">Fare Table</li>
      </ul>
    </div>

    <?php get_template_part('fare-info-en'); ?>

  </div>
</section>

<?php get_footer('en'); ?>