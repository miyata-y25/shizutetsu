<?php

/**
 * RSSフィードのカスタマイズ
 */

// <description> フィルタ
function my_excerpt_rss( $content ) {
  $post_type = get_post_type();
  if( $post_type == 'operation' ) { // 運行情報のとき
    // 内容
    $excerpt_mblength = 110;  // 制限する文字数
    $excerpt_more = '…';  // 後ろにつける文字列
    $content = $content . get_field( 'operation_cnt' ); // CFから取得
    $content = strip_tags( $content); // HTMLタグを除去
    $content = str_replace( array( "\r\n", "\r", "\n" ), '', $content );  // 改行を除去
    $content = mb_substr( $content, 0, $excerpt_mblength ) . $excerpt_more; // 文字数を制限

    /*
    // アイキャッチ画像を追加
    $ID = get_the_ID();
    if ( has_post_thumbnail( $ID ) ) {
      // $content = get_the_post_thumbnail( $ID ) . $content;
      $content = '<img src="' . get_the_post_thumbnail_url() . '">' . $content;
    }
    */
  }

  return $content;
}
add_filter( 'the_excerpt_rss', 'my_excerpt_rss' );

// <content:encoded> フィルタ
function my_content_feed( $content ) {
  $post_type = get_post_type();
  if( $post_type == 'operation' ) { // 運行情報のとき
    // 内容
    $content = $content . get_field('operation_cnt');
  }

  return $content;
}
add_filter( 'the_content_feed', 'my_content_feed' );

// rss2_head フィルタ
function my_rss2_head() {
  $post_type = get_query_var('post_type');
  if( $post_type == 'operation' ) { // 運行情報のとき
    // 運行情報が空のとき「静鉄電車は通常どおり運行しております。」の投稿(下書き/非公開を含む)を取得
      if ( !have_posts() ) {
        $args = array(
          'post_type' => 'operation',
          'posts_per_page' => 1,
          'order' => 'DESC',
          'orderby' => 'date',
          'post_status' => array('publish','draft','private'), // 下書き/非公開を含む
          'title' => '静鉄電車は通常どおり運行しております。',
        );
        query_posts($args);
      }
  }
}
add_action( 'rss2_head', 'my_rss2_head' );

// the_permalink_rss フィルタ
function my_permalink_rss( $permalink ) {
  $post_type = get_post_type();
  if( $post_type == 'operation' ) { // 運行情報のとき
    $track_param = 'lulucaapp'; // トラッキング用パラメータ
    if( get_post_status() == 'publish' ) {
      // トラッキング用パラメータを追加
      $permalink = $permalink . '?' . $track_param;
    } else {
      // ステータスが公開でなければリンクを書き換え「静鉄電車は通常どおり運行しております。」
      $permalink = home_url( '/' ) . '?' . $track_param;
    }
  }

  return $permalink;
}
add_filter( 'the_permalink_rss', 'my_permalink_rss' );


