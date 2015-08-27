
	<footer id="footer">
		<span id="copyright">&copy; <?php echo date('Y') ?> - <?php bloginfo('name') ?> <!--| <?php //wp_loginout (); ?> <?php //wp_register (' | ',''); ?> --></span>
		<span id="generator-link"><a href="http://motionmill.com" title="<?php _e( 'Motionmill webdesign, seo &amp; internet services', 'sandbox' ) ?>"><img src="<?php bloginfo ('template_url') ?>/images/poweredby.png" alt="<?php _e( 'Motionmill webdesign, seo &amp; internet services', 'sandbox' ) ?>" /></a></span>
	</footer><!-- #footer -->

</div><!-- #wrapper .hfeed -->
 <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
 <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">!window.jQuery && document.write('<script src="<?php bloginfo('template_url')?>/js/jquery-1.6.1.min.js"><\/script>')</script>


   <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/plugins.js"></script>
   <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/script.js"></script>-->


  <!--[if lt IE 7 ]>
     <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/dd_belatedpng.js"></script>
     <script>
      /* EXAMPLE */
      DD_belatedPNG.fix('img');
      
      /* string argument can be any CSS selector */
      /* .png_bg example is unnecessary */
      /* change it to what suits you! */
     </script>
  <![endif]-->


<?php wp_footer() ?>

</body>
</html>