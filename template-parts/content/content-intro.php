<section id="intro" class="clearfix">
    <div class="container">
        <div class="intro-info">
            <?php if ( is_home() ) { ?>

                <?php if ( get_theme_mod( 'hero-button-1' ) != "" ) : ?>
                    <h1 class="intro-heading">
                        <?php echo get_theme_mod( 'hero-heading' ) ?>
                    </h1>
                <?php endif; ?>
                
                <?php if ( get_theme_mod( 'hero-button-1' ) != "" && get_theme_mod( 'hero-button-1-url' ) != "" ) : ?>
                    <a href="<?php echo get_theme_mod( 'hero-button-1-url' ) ?>" class="btn-get-started scrollto">
                        <?php echo get_theme_mod( 'hero-button-1' ) ?>
                    </a>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'hero-button-2' ) != "" && get_theme_mod( 'hero-button-2-url' ) != "" ) : ?>
                    <a href="<?php echo get_theme_mod( 'hero-button-2-url' ) ?>" class="btn-services scrollto">
                        <?php echo get_theme_mod( 'hero-button-2' ) ?>
                    </a>
                <?php endif; ?>

            <?php } else if( is_category() ) { ?>

                <h1 class="intro-heading"><?php the_archive_title(); ?></h1>

            <?php } else { ?>

                <h1 class="intro-heading"><?php the_title(); ?></h1>

            <?php } ?>
        </div>
    </div>
</section><!-- #intro -->
