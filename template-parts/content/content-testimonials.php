<section id="testimonials" class="section-bg">
    <div class="container">

        <header class="section-header">
            <h2><?php echo __( 'Testimonials', 'agency-abc' ); ?></h2>
        </header>

        <?php
            $args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
            
            $the_query = new WP_Query( $args );
            
            if ( $the_query->have_posts() ) :
        ?>
        <div class="testimonials row">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-md-4">

                <div class="testimonials-item rounded wow fadeInUp">
                    
                    <blockquote class="testimonials-item-quote">
                        <?php the_field( 'client-quote' ); ?>
                    </blockquote>

                    <div class="testimonials-item-client">

                        <?php if ( get_field( 'client-image' ) ) : ?>

                            <img src="<?php echo the_field( 'client-image' ) ?>" alt="<?php the_field('client-name'); ?>" class="img-fluid rounded-circle" width="100">

                        <?php endif; ?>

                        <h5><?php echo the_field( 'client-name' ); ?></h5>

                        <p><?php echo the_field( 'client-title' ); ?></p>

                    </div>

                </div>

            </div>

        <?php endwhile; ?>

        </div>
        <?php else: ?>

            <p class="text-center"><?php echo __( 'No testimonial found.', 'agency-abc' ); ?></p>
        
        <?php wp_reset_postdata(); endif; ?>
    </div>
</section><!-- #testimonials -->