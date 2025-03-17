<?php

/**
駅情報
 */
get_header();
?>

<section class="page-contents-timetable">
  <div class="page-contents-timetable-body">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>

    <!-- <div class="page-contents-timetable-route">
      <ul>
        <li>
          <div class="sn"><span>S08</span></div>
          <div class="tit">県総合運動場</div>
          <div class="en">Pref. Sports Park</div>
        </li>
    </div>

    <div class="page-contents-timetable-updw">
      <div class="tit">
        <span class="up">上り</span><span class="dw">下り</span>
      </div>
      <ul>
        <li><a href="">
            <div class="sn"><span>S07</span></div>
            <div class="txt">古庄
              <span class="en">Furusho</span>
            </div>
          </a></li>
        <li><a href="">
            <div class="sn"><span>S09</span></div>
            <div class="txt">県立美術館前
              <span class="en">Pref. Art Museum</span>
            </div>
          </a></li>
      </ul>
    </div>

    <div class="page-contents-timetable-singleinfo">
      <div class="img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/timetable/single-img01.png" alt="">
      </div>
      <div class="txt">
        <p>鉄道線の起点駅で、『JR浜松駅』北口より左手方向に徒歩5分で乗り換えができます。<br>
          また遠州一円をネットするバス路線の発着地「バスターミナル」へアクセスしています。<br>
          昭和60年12月鉄道高架化に伴い、現在地（「新川」の河川上）に移転しました。<br>
          「遠鉄百貨店」は当駅の隣にあり、改札口を出て直接入店することができます。<br>
          また、付近には浜松市の誇る「アクトシティ」「楽器博物館」「科学館」などの施設があります。</p>
      </div>
    </div>

    <h2>ホーム図・駅構内図<span class="en">Guide Map</span></h2>
    <div class="page-contents-timetable-singlemap">
      <div class="img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/timetable/single-img02.png" alt="">
      </div>
      <div class="cnt">
        <div class="cnt-txt">
          <dl>
            <dt>所在地</dt>
            <dd>静岡県静岡市駿河区国吉田３丁目１</dd>
            <dt>営業</dt>
            <dd>6時〜23時</dd>
            <dt>電話</dt>
            <dd>054-123-6789</dd>
          </dl>
        </div>
        <div class="cnt-setsubi">
          <h3>設備・バリアフリー情報</h3>
          <div class="list">
            <div class="list-item">
              <table>
                <tr>
                  <th>トイレ</th>
                  <td>○</td>
                </tr>
                <tr>
                  <th>多目的トイレ</th>
                  <td>×</td>
                </tr>
                <tr>
                  <th>駅員有無</th>
                  <td>有</td>
                </tr>
                <tr>
                  <th>車椅子利用</th>
                  <td>○</td>
                </tr>
                <tr>
                  <th>エレベーター</th>
                  <td>○</td>
                </tr>
                <tr>
                  <th>定期券販売</th>
                  <td>○</td>
                </tr>
              </table>
            </div>
            <div class="list-item">
              <table>
                <tr>
                  <th>駐輪場</th>
                  <td>×</td>
                </tr>
                <tr>
                  <th>駐輪場（月極）</th>
                  <td>×</td>
                </tr>
                <tr>
                  <th>駐車場（1日）</th>
                  <td>×</td>
                </tr>
                <tr>
                  <th>コインロッカー</th>
                  <td>○</td>
                </tr>
                <tr>
                  <th>公衆電話</th>
                  <td>○</td>
                </tr>
                <tr>
                  <th>AED</th>
                  <td>○</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h2>JR乗換案内<span class="en">JR Lines</span></h2>
    <div class="page-contents-timetable-jrlines">
      <div class="img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/timetable/single-img03.png" alt="">
      </div>
      <div class="txt">
        <p>鉄道線の起点駅で、『JR浜松駅』北口より左手方向に徒歩5分で乗り換えができます。<br>
          また遠州一円をネットするバス路線の発着地「バスターミナル」へアクセスしています。<br>
          昭和60年12月鉄道高架化に伴い、現在地（「新川」の河川上）に移転しました。<br>
          「遠鉄百貨店」は当駅の隣にあり、改札口を出て直接入店することができます。<br>
          また、付近には浜松市の誇る「アクトシティ」「楽器博物館」「科学館」などの施設があります。</p>
      </div>
    </div> -->

    <h2>時刻表<span class="en">Timetable</span></h2>
    <div class="page-contents-timetable-menu">
      <ul>
        <li>
          <a href="">
            <div class="ud"><span>上り</span></div>
            <div class="tit">新静岡方面
              <span class="day">平日</span>
              <span class="en">For Shin-Shizuoka Weekdays</span>
            </div>
          </a>
        </li>
        <li>
          <a href="">
            <div class="ud"><span>下り</span></div>
            <div class="tit">新清水方面
              <span class="day">平日</span>
              <span class="en">For Shin-Shimizu Weekdays</span>
            </div>
          </a>
        </li>
        <li>
          <a href="">
            <div class="ud"><span>上り</span></div>
            <div class="tit">新静岡方面
              <span class="day_h">土・日・祝</span>
              <span class="en">For Shin-Shizuoka Saturdays / Holidays</span>
            </div>
          </a>
        </li>
        <li>
          <a href="">
            <div class="ud"><span>下り</span></div>
            <div class="tit">新清水方面
              <span class="day_h">土・日・祝</span>
              <span class="en">For Shin-Shimizu Saturdays / Holidays</span>
            </div>
          </a>
        </li>
      </ul>
    </div>

    <div class="btn btn-search">
      <a href="">運賃検索<span class="en">fares Search</span></a>
    </div>

  </div>
</section>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>