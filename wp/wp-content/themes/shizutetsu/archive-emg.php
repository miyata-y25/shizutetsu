<?php

/**
Template Name: 遅延証明書一覧
 */
get_header();
?>

<section class="page-contents-emg">
  <div class="page-contents-emg-body">

    <h2>遅延証明書のご利用にあたって</h2>
    <ul>
      <li>当証明書の発行対象時間は、初電から0時頃（24時頃）までの運行時間といたします。</li>
      <li>当証明書は、運行が5分以上遅れた場合に発行いたします。</li>
      <li>当証明書は、上・下線別に初電から10時、10時から17時、17時から0時頃（24時頃）までの時間帯別に発行いたします。</li>
      <li>当証明書掲出期間は、当日から7日間といたします。</li>
      <li>運行状況により遅延時分を更新いたしますが、ホームページ上に掲載されている遅延時分は、現在の運行状況を表示するものではないため、実際の遅延時分とは異なることがあります。</li>
      <li>各駅で発行している遅延証明書の遅延時分は、ホームページ上で掲載している遅延証明書の遅延時分とは異なることがあります。</li>
      <li>当証明書は、上・下線別で発生した最大の遅延時分を証明するものであり、個々の列車の遅延時分を証明するものではありません。また、お客さまがご乗車されたことを証明するものではありません。</li>
    </ul>

    <h2>遅延証明書一覧</h2>
    <div class="page-contents-emg-list">
      <?php
      // 1週間前から今日までの日付を生成
      $today = current_time('Y-m-d');
      $week_ago = date('Y-m-d', strtotime('-1 week', strtotime($today)));
      $date_range = array_reverse(get_date_range($week_ago, $today));

      // 日付ごとの投稿を取得
      $posts_by_date = array();
      $posts_query = new WP_Query(array(
        'post_type' => 'emg',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'date_query' => array(
          'after' => $week_ago,
          'before' => $today,
          'inclusive' => true,
        ),
      ));
      while ($posts_query->have_posts()) {
        $posts_query->the_post();
        $post_date = get_the_date('Y-m-d');
        $posts_by_date[$post_date][] = get_post();
      }
      wp_reset_postdata();

      // 日付と投稿のリストを表示
      foreach ($date_range as $date) {
        $formatted_date = date_i18n(get_option('date_format'), strtotime($date));
        echo '<h3>' . $formatted_date . '</h3>';
        if (isset($posts_by_date[$date])) {
          echo '<ul>';
          foreach ($posts_by_date[$date] as $post) {
            echo '<li><a href="' . get_permalink($post) . '">' . get_the_title($post) . '</a></li>';
          }
          echo '</ul>';
        } else {
          echo '<ul><li class="non">遅延情報はありません</li></ul>';
        }
      }

      // 日付範囲の配列を取得
      function get_date_range($start, $end)
      {
        $dates = array();
        $current = strtotime($start);
        $end = strtotime($end);
        while ($current <= $end) {
          $dates[] = date('Y-m-d', $current);
          $current = strtotime('+1 day', $current);
        }
        return $dates;
      }
      ?>
    </div>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>