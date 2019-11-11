<?php get_header(); ?>

    <?php get_template_part( 'template-parts/content/content', 'intro' ); ?>

    <main role="main">

        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <?php get_sidebar(); ?>
                    </div>

                    <div class="col-sm-8">
                        <?php
                            if ( have_posts() ) {

                                // Load posts loop.
                                while ( have_posts() ) {
                                    the_post();
                                    get_template_part( 'template-parts/content/content' );
                                }
                                
                            } else {

                                get_template_part( 'template-parts/content/content', 'none' );

                            }
                        ?>
                    </div>
                </div>
                
            </div>
        </section><!--/.blog-page -->

    </main>

<?php get_footer(); ?>