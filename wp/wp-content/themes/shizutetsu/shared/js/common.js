/*==============================
  Match Height
==============================*/
/*
* jquery-match-height master by @liabru
* http://brm.io/jquery-match-height/
* License MIT
*/
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,i=function(t){return parseFloat(t)||0},n=function(e){var o=1,n=t(e),a=null,r=[];return n.each(function(){var e=t(this),n=e.offset().top-i(e.css("margin-top")),s=r.length>0?r[r.length-1]:null;null===s?r.push(e):Math.floor(Math.abs(a-n))<=o?r[r.length-1]=s.add(e):r.push(e),a=n}),r},a=function(e){var o={
byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=a(e);if(o.remove){var i=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(i)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="master",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,
r._afterUpdate=null,r._rows=n,r._parse=i,r._parseOptions=a,r._apply=function(e,o){var s=a(o),h=t(e),c=[h],l=t(window).scrollTop(),p=t("html").outerHeight(!0),d=h.parents().filter(":hidden");return d.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),d.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0",
"padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),c=n(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(c,function(e,o){var n=t(o),a=0;if(s.target)a=s.target.outerHeight(!1);else{if(s.byRow&&n.length<=1)return void n.css(s.property,"");n.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block");var i={display:o};i[s.property]="",
e.css(i),e.outerHeight(!1)>a&&(a=e.outerHeight(!1)),e.css("display","")})}n.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=i(e.css("border-top-width"))+i(e.css("border-bottom-width")),o+=i(e.css("padding-top"))+i(e.css("padding-bottom"))),e.css(s.property,a-o+"px"))})}),d.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(l/p*t("html").outerHeight(!0)),this},r._applyDataApi=function(){
var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),i=o.attr("data-mh")||o.attr("data-match-height");i in e?e[i]=e[i].add(o):e[i]=o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(i,n){if(n&&"resize"===n.type){var a=t(window).width();if(a===e)return;e=a}i?-1===o&&(o=setTimeout(function(){
s(n),o=-1},r._throttle)):s(n)},t(r._applyDataApi),t(window).bind("load",function(t){r._update(!1,t)}),t(window).bind("resize orientationchange",function(t){r._update(!0,t)})});

/*==============================
  Hamburger Menu
==============================*/
var $SPToggle = $('.site-header__toggle');
var $SPMenu = $('.site-header__nav');

function SPMenuToggle() {
  $SPToggle.toggleClass('is-active');
  $SPMenu.toggleClass('is-active');
}

$(function(){
  //$SPToggle.on('touchend',SPMenuToggle);
  $SPToggle.on('click',SPMenuToggle);
});

/*==============================
  SNS Dropdown
==============================*/
const menuSet = document.querySelectorAll(".multi");
const menus = Array.prototype.slice.call(menuSet);
menus.forEach(element => {
    element.addEventListener("mouseover", () => {
        element.querySelector(".x-list").classList.add("active");
    });
    element.addEventListener("mouseleave", () => {
        element.querySelector(".x-list").classList.remove("active");
    });
});

/*==============================
  Page Top
==============================*/
$(function(){
  $('#scroll-top').on('click',function(){
    $('body,html').animate({scrollTop: 0}, 500);
  });

//link anc otherpage 
$(window).on('load', function() {
  var headerHeight = 100;
  var url = $(location).attr('href');
  if(url.indexOf("#") != -1){
    var id = url.split("#");
    var $target = $('#' + id[id.length - 1]);
    if($target.length){
      var pos = $target.offset().top - headerHeight;
      $("html, body").animate({scrollTop:pos}, 0);
      //window.scrollTo(0, pos);
    }
  }
});

});

/*==============================
  Anker Link
==============================*/
$(function(){
   $('a[href^="#"]').on('click', function(){
      var speed = 400;
      var href= $(this).attr('href');
      var target = $(href == '#' || href == '' ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});

/*==============================
  tab menu
==============================*/
$(function(){
  //category
  $(".top-contents-news-tab .tab li a").on("click", function() {
    $(".top-contents-news-tab .tabContents").hide();
    $($(this).attr("href")).fadeToggle();
    $(".top-contents-news-tab .tab li a").removeClass("active");
    $(this).toggleClass("active");
  });
  return false;
});

/*==============================
  Head Accordion
==============================*/
const headers = document.querySelectorAll('.sp-aco');
headers.forEach(header => {
  header.addEventListener('click', () => {
    header.classList.toggle('active');
    const body = header.nextElementSibling;
    body.classList.toggle('active');
    const content = body.nextElementSibling;
    content.classList.toggle('active');
  });
});

/*==============================
  Top Tooltip
==============================*/
var tooltips = document.querySelectorAll('.top-contents-route-list .tooltip');

document.addEventListener('mousemove', function (e) {
  tooltips.forEach(function (tooltip) {

  });
});

/*==============================
  form select
==============================*/

var mapbox = $('li[class=sf-field-post-meta-library_map] ul');

var mapid1 = $("li[class=sf-field-post-meta-library_map] ul li:nth-child(2) input").attr("id");
var mapid2 = $("li[class=sf-field-post-meta-library_map] ul li:nth-child(3) input").attr("id");
var mapid3 = $("li[class=sf-field-post-meta-library_map] ul li:nth-child(4) input").attr("id");

$(function(){
  //地図画像挿入
  mapbox.append('<li class="select-area1-map"><ul><li><label for="' + mapid1 + '"><img alt="①西部" src="/wp-content/themes/shizuoka-pba/images/top/area-img01.png" id="mapimg1"></label></li><li><label for="' + mapid2 + '"><img alt="②中部" src="/wp-content/themes/shizuoka-pba/images/top/area-img02.png" id="mapimg2"></label></li><li><label for="' + mapid3 + '"><img alt="③東部・伊豆" src="/wp-content/themes/shizuoka-pba/images/top/area-img03.png" id="mapimg3"></label></li></ul><div class="sp"><img alt="" src="/wp-content/themes/shizuoka-pba/images/top/area-img-sp.png"></div></li>');
  return false;
});

var selectbox = $('select[class=sf-input-select]');
$(function(){

  //選択中の地域と市区町を取得
  var areaData = $('input[class=sf-input-radio]:checked').val();
  var cityData = $('.sf-field-post-meta-library_city option:selected').val();
  //前ページでどの地域を選択したか
  if (areaData == 'west') {
    westFun();
    //selectedを市区町に再付与
    if (cityData) {
      $('option[value='+ cityData +']').prop('selected', true);
    }
  } else if (areaData == 'central') {
    centralFun();
    //selectedを市区町に再付与
    if (cityData) {
      $('option[value='+ cityData +']').prop('selected', true);
    }
  } else if (areaData == 'east') {
    eastFun();
    //selectedを市区町に再付与
    if (cityData) {
      $('option[value='+ cityData +']').prop('selected', true);
    }
  }

   //西部ボタン選択時
   $('input[value=west]').on('click', function(){
    westFun();
   });
   function westFun() {
    //全消去
    selectbox.children('option').remove();
    //表示項目
    selectbox.append('<option class="sf-level-0 sf-item-0 sf-option-active" selected="selected" data-sf-depth="0" value="">選択してください</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="hamamatsu">浜松市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="iwata">磐田市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="kakegawa">掛川市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="fukuroi">袋井市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="kosai">湖西市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="omaezaki">御前崎市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="kikugawa">菊川市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="mori">森町</option>');
    //地図画像更新
    $('#mapimg1').css('opacity','0.7');
    $('#mapimg2').css('opacity','1.0');
    $('#mapimg3').css('opacity','1.0');
   }

   //中部ボタン選択時
   $('input[value=central]').on('click', function(){
    centralFun();
   });
   function centralFun() {
    //全消去
    selectbox.children('option').remove();
    //表示項目
    selectbox.append('<option class="sf-level-0 sf-item-0 sf-option-active" selected="selected" data-sf-depth="0" value="">選択してください</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="shizuoka">静岡市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="shimada">島田市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="yaizu">焼津市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="fujieda">藤枝市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="makinohara">牧之原市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="yoshida">吉田町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="kawanehon">川根本町</option>');
    //地図画像更新
    $('#mapimg1').css('opacity','1.0');
    $('#mapimg2').css('opacity','0.7');
    $('#mapimg3').css('opacity','1.0');
   }

   //東部ボタン選択時
   $('input[value=east]').on('click', function(){
    eastFun();
   });
   function eastFun() {
    //全消去
    selectbox.children('option').remove();
    //表示項目
    selectbox.append('<option class="sf-level-0 sf-item-0 sf-option-active" selected="selected" data-sf-depth="0" value="">選択してください</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="numazu">沼津市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="atami">熱海市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="mishima">三島市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="fujinomiya">富士宮市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="fuji">富士市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="gotenba">御殿場市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="shimoda">下田市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="susono">裾野市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="izu">伊豆市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="izunokuni">伊豆の国市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="oyama">小山町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="ito">伊東市</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="minamiizu">東伊豆町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="kawazu">河津町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="minamiizu">南伊豆町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="matsuzaki">松崎町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="nishiizu">西伊豆町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="kannami">函南町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="shimizucho">清水町</option>');
    selectbox.append('<option class="sf-level-0 " data-sf-count="-1" data-sf-depth="0" value="nagaizumi">長泉町</option>');
    //地図画像更新
    $('#mapimg1').css('opacity','1.0');
    $('#mapimg2').css('opacity','1.0');
    $('#mapimg3').css('opacity','0.7');
   }

});

/*==============================
  timetables 開発時用
==============================*/
$(function(){
  //$('.page-contents-timetable-table table tr td:not(:nth-child(11n-10))').not('.empty').wrapInner('<a class="ad_times" href="#" />');
});



