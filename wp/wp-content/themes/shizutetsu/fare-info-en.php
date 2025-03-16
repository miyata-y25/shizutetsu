<?php
// 運賃計算テーブルを読み込む
include_once(get_template_directory() . '/fare_table.php');

// URLクエリ'b'の値を乗車駅のID、'a'の値を降車駅のIDとして取得する
$boarding_station_id = isset($_GET['b']) ? $_GET['b'] : null;
$alighting_station_id = isset($_GET['a']) ? $_GET['a'] : null;

// 駅が見つかるかどうかを確認し、運賃を取得する
if ($boarding_station_id && $alighting_station_id && $boarding_station_id != $alighting_station_id) {
  if (isset($stations[$boarding_station_id]) && isset($stations[$alighting_station_id])) {
    // 普通旅客運賃
    $normal_val = $normal_fare[$boarding_station_id][$alighting_station_id];
    if ($normal_val === null) {
      $normal_val = $normal_fare[$alighting_station_id][$boarding_station_id];
    }

    // 通勤定期(1ヶ月)
    $commuter1_val = $commuter1_fare[$boarding_station_id][$alighting_station_id];
    if ($commuter1_val === null) {
      $commuter1_val = $commuter1_fare[$alighting_station_id][$boarding_station_id];
    }
    // 通勤定期(3ヶ月)
    $commuter3_val = $commuter3_fare[$boarding_station_id][$alighting_station_id];
    if ($commuter3_val === null) {
      $commuter3_val = $commuter3_fare[$alighting_station_id][$boarding_station_id];
    }
    // 通勤定期(6ヶ月)
    $commuter6_val = $commuter6_fare[$boarding_station_id][$alighting_station_id];
    if ($commuter6_val === null) {
      $commuter6_val = $commuter6_fare[$alighting_station_id][$boarding_station_id];
    }

    // 通学定期(1ヶ月)
    $student1_val = $student1_fare[$boarding_station_id][$alighting_station_id];
    if ($student1_val === null) {
      $student1_val = $student1_fare[$alighting_station_id][$boarding_station_id];
    }
    // 通学定期(3ヶ月)
    $student3_val = $student3_fare[$boarding_station_id][$alighting_station_id];
    if ($student3_val === null) {
      $student3_val = $student3_fare[$alighting_station_id][$boarding_station_id];
    }
    // 通学定期(6ヶ月)
    $student6_val = $student6_fare[$boarding_station_id][$alighting_station_id];
    if ($student6_val === null) {
      $student6_val = $student6_fare[$alighting_station_id][$boarding_station_id];
    }
?>

    <h2>Fares List</h2>
      <h3>Route</h3>
      <div class="page-contents-station-single-route">
        <ul>
          <li>
            <div class="sn"><span><?php echo esc_html($boarding_station_id); ?></span></div>
            <div class="tit"><?php echo esc_html($stations[$boarding_station_id]['en_name']); ?></div>
          </li>
          <li>
            <div class="sn"><span><?php echo esc_html($alighting_station_id); ?></span></div>
            <div class="tit"><?php echo esc_html($stations[$alighting_station_id]['en_name']); ?></div>
          </li>
        </ul>
      </div>
      <h3>Fare</h3>
      <div class="page-contents-station-single-fare">
        <dl>
          <dt>Fare</dt>
          <dd class="full">¥<?php echo number_format($normal_val); ?></dd>

          <dt>Student Commuter Pass 1month</dt>
          <dd>¥<?php echo number_format($student1_val); ?></dd>
          <dt>Student Commuter Pass 3month</dt>
          <dd>¥<?php echo number_format($student3_val); ?></dd>
          <dt>Student Commuter Pass 6month</dt>
          <dd>¥<?php echo number_format($student6_val); ?></dd>

          <dt>Commuter Pass 1month</dt>
          <dd>¥<?php echo number_format($commuter1_val); ?></dd>
          <dt>Commuter Pass 3month</dt>
          <dd>¥<?php echo number_format($commuter3_val); ?></dd>
          <dt>Commuter Pass 6month</dt>
          <dd>¥<?php echo number_format($commuter6_val); ?></dd>
        </dl>
      </div>

<?php
  } else {
    echo '<div class="page-contents-station-single-route"><p>Station not found.<br>Please go back to the top of the search and select the station again.</p></div>';
  }
} else {
  echo '<div class="page-contents-station-single-route"><p>The station designation is incorrect.<br>Please go back to the top of the search and select the station again.</p></div>';
}
?>

    <div class="btn">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>/en/fare">Back</a>
    </div>
