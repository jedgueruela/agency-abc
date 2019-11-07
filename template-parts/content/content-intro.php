<section id="intro" class="clearfix">
    <div class="container">
        <div class="intro-info">
            <h1 class="intro-heading"><span><?php the_title(); ?></span></h1>
            <?php if ( is_home() ) : ?>
                
                <?php if ( get_theme_mod( 'home_intro_button_1' ) != "" && get_theme_mod( 'home_intro_button_1_url' ) != "" ) : ?>
                    <a href="<?php echo get_theme_mod( 'home_intro_button_1_url' ) ?>" class="btn-get-started scrollto">
                        <?php echo get_theme_mod( 'home_intro_button_1' ) ?>
                    </a>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'home_intro_button_2' ) != "" && get_theme_mod( 'home_intro_button_2_url' ) != "" ) : ?>
                    <a href="<?php echo get_theme_mod( 'home_intro_button_2_url' ) ?>" class="btn-services scrollto">
                        <?php echo get_theme_mod( 'home_intro_button_2' ) ?>
                    </a>
                <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>
</section><!-- #intro -->
