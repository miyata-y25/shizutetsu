<?php

/**

 */
?>

</div><!-- main-contents -->

</div><!-- wrapper -->

<footer class="site-footer" id="footer">

  <div class="scroll-top">
    <button id="scroll-top"></button>
  </div>

  <div class="site-footer__btm">
    <div class="site-footer__btm__body">
      <div class="tit">
        <p><a href="/en"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo_en.svg" alt="Shizutetsu Railway"></a></p>
      </div>
      <div class="fnav01">
        <ul>
          <li><a href="/en/timetable/timetable-station" class="ico01">Timetables</a></li>
          <li><a href="/en/fare" class="ico02">Fare Table</a></li>
          <li><a href="/en/timetable/timetable-station" class="ico03">Station Info</a></li>
        </ul>
      </div>
      <div class="copy">
        Copyright © 2023 Shizuoka Railway All Rights Reserved.
      </div>
    </div>
  </div>

	<div class="fixed-social">
		<ul>
      <li class="multi">
        <span class="x-btn"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-x.svg" alt="X"></span>
        <div class="x-list">
          <a href="https://twitter.com/shizutetsu_pr" target="_blank">Operation Info</a>
          <a href="https://twitter.com/ShizutetsuEvent" target="_blank">Upcoming Events</a>
        </div>
      </li>
      <li><a href="https://www.facebook.com/shizutetsudensya/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-fb.svg" alt="facebook"></a></li>
      <li><a href="https://www.instagram.com/shizutetsu_railway/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-ig.svg" alt="Instagram"></a></li>
		</ul>
	</div>

</footer>

<?php wp_reset_query(); ?>

<!-- ============================================================================================== -->

<!-- js -->
<script src="<?php echo get_template_directory_uri(); ?>/shared/js/lib/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/shared/js/common.js"></script>
<?php if (get_post_type() === 'timetables') : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/shared/js/lib/modaal/modaal.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $(".ad_times").modaal();
      return false;
    });
  </script>
<?php endif; ?>

<script type="text/javascript">
  $(function() {

  });
</script>

<?php wp_footer(); ?>
</body>

</html>