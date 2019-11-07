<?php get_header(); ?>

    <?php get_template_part( 'template-parts/content/content', 'intro' ); ?>

    <main role="main">
    
        <section class="blog-page">
            <div class="container">
                <?php
                    get_template_part( 'template-parts/content/content' );
                ?>
            </div>
        </section><!--/.blog-page -->

    </main>

<?php get_footer(); ?>