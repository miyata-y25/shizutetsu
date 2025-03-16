<?php

/**

 */
get_header();
?>

<section class="page-contents-404">
<div class="page-contents-404-body">
	<h2>Page Not Found.</h2>
	<p>いつも静鉄電車のウェブサイトをご利用いただき、ありがとうございます。<br>
	あなたがアクセスしようとしたページは削除されたかURLが変更されているため、見つけることができません。<br>
	<a href="/">HOME</a> から再度アクセスしてください。</p>
	<p class="en">Thank you for visiting the Shizutetsu Railway website.<br>
	The page you tried to access cannot be found because it has been deleted or its URL has been changed.<br>
	Please access again from <a href="/en/">HOME</a>.</p>
	<div class="btn btn-search">
		<a href="/">サイトトップへ戻る</a>
	</div>
</div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>