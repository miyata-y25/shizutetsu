<?php

/**
お問い合わせ
 */
get_header();
?>

<section class="page-contents-contact">
	<div class="page-contents-contact-body">
		<div class="contact-info">
			<div class="caution">
				<h2>お問い合わせ時の注意事項</h2>
				<p>○当回答までに時間を要する場合がございます。また、下記の期間にいただいたお問い合わせにつきましては、翌営業日以降の回答となります。ご了承ください。<br>
					 ・土曜日・日曜日・祝祭日・年末年始などを含む本社営業時間外<br>
					○内容によっては、お答えいたしかねる場合がございます。あらかじめご了承ください。<br>
					 ＜お答えいたしかねるお問い合せの例＞<br>
						・匿名によるお問い合せ<br>
						・特定の個人を誹謗中傷するもの<br>
						・商品・サービスの売り込みなどの営業活動<br>
						・内容の趣旨が不明・不明確なもの<br>
					○下記の場合は回答いたしかねますので、お問い合わせの際はご注意ください。<br>
					 ・ご入力いただいたメールアドレスに誤りがある場合<br>
					 ・迷惑メール対策などで受信制限をされている場合<br>
					○お急ぎのお客様は、直接<a href="https://www.shizutetsu.co.jp/contact.html" target="_blank">グループ各社窓口</a>までお電話にてお問い合わせください。</p>
			</div>
			<aside>
				<h3>お忘れ物または運行状況等は下記までお電話でお問い合わせください。</h3>
				<dl>
					<dt>お忘れ物のお問い合わせ</dt>
					<dd>
						新静岡駅／TEL：054-254-5115<small>営業時間／5:45～24:00（年中無休）</small>
						新清水駅／TEL：054-352-1500<small>営業時間／5:45～24:15（年中無休）</small></dd>
					<dt>運行に関するお問い合わせ</dt>
					<dd>
						運転運輸営業所／TEL：054-261-6981<small>営業時間／5:45～24:15（年中無休）</small></dd>
					<dt>その他電車に関するお問い合わせ</dt>
					<dd>
						鉄道部運輸営業課／TEL：054-254-5108<small>営業時間／9:00～17:45（平日）</small>
						運転運輸営業所／TEL：054-261-6981<small>営業時間／5:45～24:15（年中無休）</small></dd>
				</dl>
				<p class="kome">※おかけ間違いないようご注意ください。</p>
				<p class="kome">※お客さまからいただいたお電話は、内容を正確に承るため、録音をさせていただく場合があります。</p>
				<p class="kome">※回答をさせていただく場合には、ご連絡いただいた内容の事実確認や状況確認などを行ないますので、お時間がかかる場合がございます。</p>
			</aside>
		</div>
		
		<h2>お問い合わせフォーム</h2>
		<p>お客様の情報は<a href="https://www.shizutetsu.co.jp/privacypolicy.html" target="_blank">プライバシーポリシー</a>により保護されております。<br>
			また、このページは、プライバシー保護のため、SSL暗号化通信を採用しています。</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>