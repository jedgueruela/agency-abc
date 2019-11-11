<?php get_header(); ?>

    <main role="main">
        <div class="container">
            <div class="blog-page row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                <?php 
                    while ( have_posts() ) :
                        the_post();
                        
                        get_template_part( 'template-parts/content/content', 'page' );
                    endwhile;
                ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>