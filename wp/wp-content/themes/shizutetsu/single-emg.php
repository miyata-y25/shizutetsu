<?php

/**
記事 - 遅延証明
 */
get_header();
?>

<section class="page-contents-emg">
  <div class="page-contents-emg-body">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="page-contents-emg-report">

          <div class="cnt">

            <div class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/head-logo.svg" alt="静鉄電車">
            </div>

            <h2>遅延証明書</h2>
            <p class="txt">静岡鉄道の列車が以下の通り遅延したことを証明いたします。</p>
            <dl>
              <?php if (get_field('day')) { ?>
                <dt>遅延発生日</dt>
                <dd><?php the_field('day'); ?></dd>
              <?php } ?>
              <?php if (get_field('time')) { ?>
                <dt>遅延時間帯</dt>
                <dd><?php the_field('time'); ?></dd>
              <?php } ?>
              <?php if (get_field('updown')) { ?>
                <dt>上下区分</dt>
                <dd><?php the_field('updown'); ?></dd>
              <?php } ?>
              <?php if (get_field('max')) { ?>
                <dt>最大遅延</dt>
                <dd><?php the_field('max'); ?></dd>
              <?php } ?>
            </dl>
            <div class="date">
              <p><?php the_time('Y年m月j日'); ?></p>
              <p>静岡鉄道株式会社</p>
            </div>

            <ul class="cau">
              <li>静岡鉄道の各駅で発行している遅延証明書の遅延時分は、ホームページ上で掲載している遅延証明書の遅延時分とは異なることがあります。</li>
              <li>当証明書は、静岡鉄道の上・下線別で発生した最大の遅延時分を証明するものであり、個々の列車の遅延時分を証明するものではありません。また、お客様がご乗車されたことを証明するものではありません。</li>
              <li>当証明書は、当社線列車の遅延のみを証明するものであり、遅延によりお客さまに生じた損害等を賠償することを証明するものではありません。</li>
              <li>当社が発行した静岡鉄道乗車券以外の乗車券、航空券、旅行券等の払いもどしについては、当該券面が効力を有する会社の規約・約款類によりますので、ご注意ください。</li>
            </ul>

          </div>

          <div class="btn-area">
            <a href="#" onclick="window.print();">印刷する</a>
          </div>

          <style>
            /* 印刷用スタイル */
            @media print {

              .site-header,
							.sub-mainVisual,
              .site-footer,
              .bread,
              .btn-area,
              .bnr-area,
              .bnr-s-area {
                display: none !important;
              }
            }
          </style>

        </div>

    <?php endwhile;
    endif; ?>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>