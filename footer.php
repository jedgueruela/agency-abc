    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-info">
                        <?php
                            if ( is_active_sidebar( 'footer-column-1' ) ) :
                                dynamic_sidebar( 'footer-column-1' );
                            endif; 
                        ?>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <?php
                            if ( is_active_sidebar( 'footer-column-2' ) ) :
                                dynamic_sidebar( 'footer-column-2' );
                            endif; 
                        ?>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <?php
                            if ( is_active_sidebar( 'footer-column-3' ) ) :
                                dynamic_sidebar( 'footer-column-3' );
                            endif; 
                        ?>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <?php
                            if ( is_active_sidebar( 'footer-column-4' ) ) :
                                dynamic_sidebar( 'footer-column-4' );
                            endif; 
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            
            <?php get_template_part( 'template-parts/content/content', 'social-links' ); ?>

            <div class="copyright" role="contentinfo">&copy; <?php echo date( 'Y' ); ?> <?php echo __( 'Copyright', 'agency-abc' ) ?> <strong><?php echo bloginfo( 'name' ) ?></strong>. <?php echo __( 'All rights reserved.', 'agency-abc' ) ?></div>
        </div>
    </footer><!-- #footer -->

    <?php wp_footer(); ?>

</body>
</html>