<?php

/**
お問い合わせ完了
 */
get_header();
?>

<section class="page-contents-contact">
  <div class="page-contents-contact-body">

    <h2>送信完了しました</h2>
    <p>お問い合わせ内容の送信が完了しました。<br>
      弊社にて内容を確認後、返答が必要なお客様にはご返信をさせていただきますので、<br>
      少々お待ちください。</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

    <div class="btn">
      <a href="/">トップページへ戻る</a>
    </div>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>