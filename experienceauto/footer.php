<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package experienceauto
 */

?>
<footer class="container-fluid footer-setting">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-6"> 
          <div class="left-footer">
			<?php dynamic_sidebar("footer-form");?>
          <nav class="navbar navbar-expand-sm">
            <ul class="navbar-nav footer-icon">
             <li class="nav-item">
          <a class="nav-link" href="<?php echo of_get_option( 'facebook_link','' ); ?>"><i class="fa fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo of_get_option( 'instagram_link','' ); ?>"><i class="fa fa-instagram"></i></a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href= "<?php echo of_get_option( 'youtube_link','' ); ?>"><i class="fa fa-youtube-play"></i></a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="https://wa.me/<?php echo of_get_option( 'whatsapp_link','' ); ?>"><i class="fa fa-whatsapp"></i></a>
          
        </li>
            </ul>
        </nav>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
          <div class="right-footer">
            <nav class="navbar footer-nav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo of_get_option( 'privacy_policy_link','' ); ?>"><i class="fa fa-stop"></i> Privecy Policy</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo of_get_option( 'terms_and_conditions_link','' ); ?>"><i class="fa fa-stop"></i> Terms & conditions</i></a>
                </li>
              </ul>
          </nav>
          </div>  
        </div>
      </div>  
    </div>
    <div class="bottom-footer">
	  <div class="container bottom-footer-setting">
		<p><?php echo of_get_option( 'footer_copyright_text','' ); ?></p>
	  </div>
  </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>
