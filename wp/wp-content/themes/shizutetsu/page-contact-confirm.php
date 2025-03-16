<?php

/**
お問い合わせ確認
 */
get_header();
?>

<section class="page-contents-contact">
  <div class="page-contents-contact-body">

    <h2>お問い合わせ内容の確認</h2>
    <p>お客様の情報はプライバシーポリシーにより保護されております。<br>
      また、このページは、プライバシー保護のため、SSL暗号化通信を採用しています。</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>