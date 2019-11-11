<?php get_header(); ?>

    <?php if ( has_post_thumbnail() ) : ?>
        <section class="blog-banner" style="background-image:url(<?php the_post_thumbnail_url( 'large' ) ?>)"></section>
    <?php endif; ?>

    <main role="main">
        <div class="container">
            <div class="blog-page row">
                <div class="col-sm-4">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                <?php 
                    while ( have_posts() ) :
                        the_post();
                        
                        get_template_part( 'template-parts/content/content', 'single' );
                    endwhile;
                ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>