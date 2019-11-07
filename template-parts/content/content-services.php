<section id="services" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h2><?php echo __( 'Services', 'agency-abc' ); ?></h2>
        </header>

        <?php
            $args = array( 'post_type' => 'services', 'posts_per_page' => -1 );
            
            $the_query = new WP_Query( $args );
            
            if ( $the_query->have_posts() ) :
        ?>
            <div class="row justify-content-sm-center services-wrapper">
            
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <?php echo the_field('icon'); ?>
                        </div>

                        <?php the_title( '<h2 class="title">', '</h2>' ); ?>

                        <?php the_content( '<p class="description">', '</p>' ) ?>
                    </div>
                </div>

            <?php endwhile; ?>

            </div>

        <?php else: ?>

            <p class="text-center"><?php echo __( 'No service found.', 'agency-abc' ); ?></p>
        
        <?php wp_reset_postdata(); endif; ?>
    </div>
</section><!-- #services -->