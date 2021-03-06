<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
    </div><!-- #main .wrapper -->
    <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
        <footer id="colophon" class="clearfix" role="contentinfo">
            <?php get_sidebar('footer-right'); ?>
            <?php get_sidebar('footer-left'); ?>
        </footer><!-- #colophon -->
    <?php endif; // end footer widget area ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>