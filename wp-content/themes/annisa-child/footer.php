<?php
/**
 * The template for displaying the footer.
 *
 * @package anissa
 */

?>


<footer id="colophon" class="py-5" role="contentinfo">
  <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>

    <hr>
    

 <!-- SIGN UP
    =========================================-->
    <section class="container">
      <div class="row">
          <div class="widget-area col text-center">
           <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php endif; ?>
          </div>
      </div>
          <!-- .widget-area -->
    </section>


    



  <?php endif; ?>

</footer>

<?php wp_footer(); ?>

</body>
</html>



