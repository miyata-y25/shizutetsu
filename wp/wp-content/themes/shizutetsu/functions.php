<?php

/**
 * ログイン画面のロゴ変更
 */
function login_logo() {
  echo '<style type="text/css">.login h1 a {background-image: url('.get_bloginfo('template_directory').'/images/head-logo.svg); width:auto; height:3em; background-size:contain; font-size: inherit;}</style>';
}
add_action('login_head', 'login_logo');

//管理バーの要素を非表示
function remove_admin_bar_menu( $wp_admin_bar ) {
    $wp_admin_bar->remove_menu( 'wp-logo' );      // WordPressロゴ
    //$wp_admin_bar->remove_menu( 'site-name' );    // サイト名
    //$wp_admin_bar->remove_menu( 'view-site' );    // サイト名 → サイトを表示
    //$wp_admin_bar->remove_menu( 'dashboard' );    // サイト名 → ダッシュボード（ウェブサイト側）
    $wp_admin_bar->remove_menu( 'themes' );       // サイト名 → テーマ（ウェブサイト側）
    $wp_admin_bar->remove_menu( 'customize' );    // サイト名 → カスタマイズ（ウェブサイト側）
    $wp_admin_bar->remove_menu( 'widgets' );      // サイト名 → ウィジェット（ウェブサイト側）
    $wp_admin_bar->remove_menu( 'edit' );         // 投稿を編集(ウェブサイト側)
    $wp_admin_bar->remove_menu( 'comments' );     // コメント
    $wp_admin_bar->remove_menu( 'updates' );      // 更新
    //$wp_admin_bar->remove_menu( 'new-content' );  // 新規
    $wp_admin_bar->remove_menu( 'new-post' );     // 新規 → 投稿
    $wp_admin_bar->remove_menu( 'new-media' );    // 新規 → メディア
    $wp_admin_bar->remove_menu( 'new-link' );     // 新規 → リンク
    $wp_admin_bar->remove_menu( 'new-page' );     // 新規 → 固定ページ
    $wp_admin_bar->remove_menu( 'new-user' );     // 新規 → ユーザー
    //$wp_admin_bar->remove_menu( 'my-account' );   // マイアカウント
    //$wp_admin_bar->remove_menu( 'user-info' );    // マイアカウント → プロフィール
    $wp_admin_bar->remove_menu( 'edit-profile' ); // マイアカウント → プロフィール編集
    //$wp_admin_bar->remove_menu( 'logout' );       // マイアカウント → ログアウト
    $wp_admin_bar->remove_menu( 'search' );       // 検索（ウェブサイト側）
    $wp_admin_bar->remove_menu( 'preview' );      // 投稿を表示(管理画面側)
    $wp_admin_bar->remove_menu( 'aioseo' );      // Aii In One SEO
    $wp_admin_bar->remove_menu( 'password_protected' );      // Aii In One SEO
}
add_action('admin_bar_menu', 'remove_admin_bar_menu', 150);

/**
 * 管理画面TOPにウィジェットを追加
 */
function add_dashboard_widgets() {
  wp_add_dashboard_widget(
    'manual_dashboard_widget', // ウィジェットのスラッグ名
    '更新マニュアル', // ウィジェットに表示するタイトル
    'dashboard_widget_function' // 実行する関数
  );
}
add_action( 'wp_dashboard_setup', 'add_dashboard_widgets' );

function dashboard_widget_function() {
?>
<p><a href="https://train.shizutetsu.co.jp/wp-content/themes/shizutetsu/manual.pdf" target="_blank">更新マニュアルPDF</a></p>
<?php
}

/**
// ページタイトル | サイト名の表示
add_theme_support('title-tag');
function change_title_separator($separator)
{
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator', 'change_title_separator');

//メディアの移動
function customize_menus()
{
  global $menu;
  $menu[19] = $menu[10];
  unset($menu[10]);
}
add_action('admin_menu', 'customize_menus');

//the_archive_title から文字削除
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } else {
  }
  return $title;
});

add_theme_support('post-thumbnails');


/**
 * MW WP Formのビジュアルエディタをオフにする
 */
function my_off_ve_in_page(){
  global $typenow;
  if( in_array( $typenow, array( 'page' ,'mw-wp-form' ) ) ){
    add_filter('user_can_richedit', 'my_off_ve_filter');
  }
}
function my_off_ve_filter(){
  return false;
}
add_action( 'load-post.php', 'my_off_ve_in_page' );
add_action( 'load-post-new.php', 'my_off_ve_in_page' );


/**
 * カスタム投稿タイプ『運行情報』
 */
function create_post_type_operation()
{
  $exampleSupportsOperation = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    // 'editor',  // 記事本文
    'revisions'  // リビジョン
  ];
  register_post_type(
    'operation',  // カスタム投稿ID
    array(
      'label' => '運行情報',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 4,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsOperation,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-info-outline'
    )
  );
}
add_action('init', 'create_post_type_operation'); // アクションに上記関数をフックします


/**
 * カスタム投稿タイプ『遅延情報』
 */
function create_post_type_emg()
{
  $exampleSupportsEmg = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'revisions'  // リビジョン
  ];
  register_post_type(
    'emg',  // カスタム投稿ID
    array(
      'label' => '遅延情報',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 4,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsEmg,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-warning'
    )
  );
}
add_action('init', 'create_post_type_emg'); // アクションに上記関数をフックします

/**
 * カスタム投稿タイプ『新着情報』
 */
function create_post_type_news()
{
  $exampleSupportsNews = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'revisions'  // リビジョン
  ];
  register_post_type(
    'news',  // カスタム投稿ID
    array(
      'label' => '新着情報',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 4,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsNews,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-flag'
    )
  );
  register_taxonomy(
    'newslist',
    'news',
    array(
      'label' => 'カテゴリー',
      'public' => true, 'show_ui' => true,
      'hierarchical' => true,
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'create_post_type_news'); // アクションに上記関数をフックします

/**
 * カスタム投稿タイプ『沿線スポット』
 */
function create_post_type_spot()
{
  $exampleSupportsSpot = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',
    'editor',
    'author',
    'thumbnail',
    'custom-fields'
  ];
  register_post_type(
    'spot',  // カスタム投稿ID
    array(
      'label' => '沿線スポット',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsSpot,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-post-status'
    )
  );
  register_taxonomy(
    'spottag',
    'spot',
    array(
      'label' => 'タグ',
      'rewrite' => array('slug' => 'spottag'),
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'create_post_type_spot'); // アクションに上記関数をフックします

/**
 * カスタム投稿タイプ『沿線イベント情報』
 */
function create_post_type_events()
{
  $exampleSupportsEvents = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',
    'author',
    'editor',
    'custom-fields'
  ];
  register_post_type(
    'events',  // カスタム投稿ID
    array(
      'label' => '沿線イベント情報',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'menu_position' => 6,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsEvents,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-calendar'
    )
  );
}
add_action('init', 'create_post_type_events'); // アクションに上記関数をフックします

/**
 * カスタム投稿タイプ『サスティナビリティ』
 */
function create_post_type_sustainability()
{
  $exampleSupportsSustainability = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'revisions'  // リビジョン
  ];
  register_post_type(
    'sustainability',  // カスタム投稿ID
    array(
      'label' => 'サスティナビリティ',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'menu_position' => 4,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsSustainability,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-admin-site'
    )
  );
}
add_action('init', 'create_post_type_sustainability'); // アクションに上記関数をフックします

/**
 * カスタム投稿タイプ『駅情報』
 */
function create_post_type_station()
{
  $exampleSupportsStation = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'page-attributes',  // テンプレート
    'revisions',  // リビジョン
  ];
  register_post_type(
    'station',  // カスタム投稿ID
    array(
      'label' => '駅情報',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => false,  // アーカイブ(一覧表示)を有効にするか否か
      'hierarchical' => true, //固定ページのような階層を持たせる 初期値：false
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsStation,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-admin-home'
    )
  );
}
add_action('init', 'create_post_type_station'); // アクションに上記関数をフックします

/**
 * カスタム投稿タイプ『時刻表』
 */
function create_post_type_timetables()
{
  $exampleSupportsTimetables = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'page-attributes',  // テンプレート
    'revisions',  // リビジョン
  ];
  register_post_type(
    'timetables',  // カスタム投稿ID
    array(
      'label' => '時刻表',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => false,  // アーカイブ(一覧表示)を有効にするか否か
      'hierarchical' => true, //固定ページのような階層を持たせる 初期値：false
      'menu_position' => 6,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsTimetables,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-clock'
    )
  );
}
add_action('init', 'create_post_type_timetables'); // アクションに上記関数をフックします

/**
 * カスタム投稿タイプ『English』
 */
function create_post_type_english()
{
  $exampleSupportsEnglish = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'page-attributes',  // テンプレート
    'revisions',  // リビジョン
  ];
  register_post_type(
    'en',  // カスタム投稿ID
    array(
      'label' => 'English',  // カスタム投稿名(管理画面の左メニューに表示されるテキスト)
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブ(一覧表示)を有効にするか否か
      'hierarchical' => true, //固定ページのような階層を持たせる 初期値：false
      'menu_position' => 6,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupportsEnglish,  // 投稿画面でどのmoduleを使うか的な設定
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-admin-site-alt3'
    )
  );
}
add_action('init', 'create_post_type_english'); // アクションに上記関数をフックします

/**
 * ダッシュボードメニューの名称変更
 */
add_filter('gettext', 'change_side_text');
add_filter('ngettext', 'change_side_text');
function change_side_text($translated)
{
  $translated = str_ireplace('ダッシュボード', '管理画面TOP', $translated);
  $translated = str_ireplace('メディア', 'ファイル管理', $translated);
  return $translated;
}
//固定ページ
function aktk_post_type_labels_page($labels)
{
  foreach ($labels as $key => $value) {
    $labels->$key = str_replace('固定ページ', 'ページ編集', $value);
  }
  return $labels;
}
add_filter('post_type_labels_page', 'aktk_post_type_labels_page');

/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } else {
  }
  return $title;
});

//アーカイブの投稿数を変更
function custom_news_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query()) {
    if ($query->is_post_type_archive('news')) {
      $query->set('posts_per_page', 10); //表示数
    }
  }
}
add_action('pre_get_posts', 'custom_news_posts_per_page');


add_filter( "radio_buttons_for_taxonomies_no_term_newslist", "__return_FALSE" );

/**
 * 全投稿にアイキャッチ機能追加
 */
add_theme_support( 'post-thumbnails' );

/**
  * Cloud Front 経由でのアクセスでもビジュアルエディタが利用（AWS対応）
	*/
function user_can_richedit_custom() {
    global $wp_rich_edit;
 
    if (get_user_option('rich_editing') == 'true' || !is_user_logged_in()) {
        $wp_rich_edit = true;
        return true;
    }
 
    $wp_rich_edit = false;
    return false;
}
add_filter('user_can_richedit', 'user_can_richedit_custom');

//SVGをアップロード
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
