<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Fitness Club Lite
 */
?>

<div class="footer-wrapper"> 
   <div class="container footer"> 
          <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
                <div class="widget-column-1">  
                    <?php dynamic_sidebar( 'footer-widget-1' ); ?>
                </div>
           <?php endif; ?>
          
          <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
                <div class="widget-column-2">  
                    <?php dynamic_sidebar( 'footer-widget-2' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
                <div class="widget-column-3">  
                    <?php dynamic_sidebar( 'footer-widget-3' ); ?>
                </div>
           <?php endif; ?>
           
           <div class="clear"></div>
      </div><!--end .container-->

        <div class="footer-copyright"> 
            <div class="container">            	
                <div class="design-by">
				  <?php bloginfo('name'); ?>. <?php esc_html_e('All Rights Reserved', 'fitness-club-lite');?>
                  <a href="<?php echo esc_url( __( 'https://gracethemes.com/themes/free-personal-trainer-wordpress-theme', 'fitness-club-lite' ) ); ?>" target="_blank">
				    <?php printf( __( 'Theme by %s', 'fitness-club-lite' ), 'Grace Themes' ); ?>
                  </a>
                </div>
             </div><!--end .container-->             
        </div><!--end .footer-copyright-->  
                     
     </div><!--end #footer-wrapper-->
</div><!--#end sitelayout_type-->

<?php wp_footer(); ?>
</body>
</html>