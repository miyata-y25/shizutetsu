// 運賃計算 乗車駅選択ページ js

// 乗車駅選択
(function($) {
  $(document).ready(function() {
    $('.page-contents-station-single-list ul li a').each(function() {
      var stationId = $(this).find('.sn span').text();
      var url = 'fare/station?b=' + encodeURIComponent(stationId);
      $(this).attr('href', url);
    });
  });
})(jQuery);
