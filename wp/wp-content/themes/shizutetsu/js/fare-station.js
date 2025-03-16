// 運賃計算 降車駅選択ページ js

// 降車駅選択
(function($) {
  $(document).ready(function() {
    var currentB = getParameterByName('b');
    $('.page-contents-station-single-list ul li a').each(function() {
      var stationId = $(this).find('.sn span').text();
      var url = 'fare/station/station-info?b=' + encodeURIComponent(currentB) + '&a=' + encodeURIComponent(stationId);
      $(this).attr('href', url);
      if (stationId === currentB) {
        $(this).css('pointer-events', 'none');
        $(this).prop('disabled', true);
        $(this).addClass('disabled');
        $(this).click(function(event) {
          event.preventDefault();
        });
      }
    });
  });

  function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
    var results = regex.exec(url);
    if (!results) {
      return null;
    }
    if (!results[2]) {
      return '';
    }
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }
})(jQuery);
