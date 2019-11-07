<section id="portfolio">
    <div class="container wow fadeInUp">

        <header class="section-header">
            <h2><?php echo __( 'Portfolio', 'agency-abc' ); ?></h2>
        </header>

        <?php
            $args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
            
            $the_query = new WP_Query( $args );
            
            if ( $the_query->have_posts() ) :
        ?>
    
            <div class="portfolio-wrapper row">

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="col-lg-3 col-md-6 portfolio-item">
                    <a href="<?php the_permalink(); ?>">
                        
                        <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail( 'large' );
                            endif;
                        ?>

                        <div class="details">
                            <?php the_title( '<h4>', '</h4>' ) ?>

                            <span><?php the_excerpt() ?></span>
                        </div>
                    </a>
                </div>

            <?php endwhile; ?>

            </div>

        <?php else: ?>

            <p class="text-center"><?php echo __( 'No project found.', 'agency-abc' ); ?></p>
        
        <?php wp_reset_postdata(); endif; ?>
    </div>
</section><!-- #portfolio -->