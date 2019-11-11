<section id="about">
    <div class="container">
        <header class="section-header">
            <h2><?php echo __( 'About Us', 'agency-abc' ); ?></h2>
        </header>
        <div class="row about-extra">

            <?php if ( get_theme_mod( 'about-image' ) != 0 ) : ?>
                <div class="col-md-6 col-sm-12 wow fadeInUp">
                    <img src="<?php echo wp_get_attachment_url( get_theme_mod( 'about-image' ) ); ?>" class="img-fluid" width="500">
                </div>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'about-text' ) != "" ) : ?>
                <div class="col-md-6 col-sm-12 wow fadeInUp pt-sm-5 pt-lg-0">
                    <?php echo wp_kses_post( get_theme_mod( 'about-text' ) ); ?>
                </div>
          <?php endif; ?>
      </div>
  </div>
</section><!--/#about -->