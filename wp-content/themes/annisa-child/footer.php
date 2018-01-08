<?php
/**
 * The template for displaying the footer.
 *
 * @package anissa
 */

?>


<footer id="colophon" class="py-5 container-fluid" role="contentinfo">
  <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>

    <div class="row text-white mx-auto">

    <!-- CONTACT
    ========================================-->                 
          <div class="widget-area col-sm-4 text-center">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php endif; ?>
          </div>
          <!-- .widget-area -->

    <!-- SIGN UP
    =========================================-->
          <div class="widget-area col-sm-4">
            <div class="text-center">
           <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php endif; ?>
          </div>
          </div>
          <!-- .widget-area -->
          
    <!-- LOGO
    =========================================-->
          <div class="widget-area col-sm-4 mt-5 text-center">
            <img src="http://sfprivatecollections.org/wp-content/uploads/2017/05/enterprise-footer.png">
          </div>
          <!-- .widget-area --> 
  
  <?php endif; ?>
 
  </div><!--row-->
</footer>

<?php wp_footer(); ?>

</body>
</html>



