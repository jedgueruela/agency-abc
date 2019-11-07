<?php get_header(); ?>

    <?php get_template_part( 'template-parts/content/content', 'intro' ); ?>

    <main role="main">
        
        <?php get_template_part( 'template-parts/content/content', 'about' ); ?>

        <?php get_template_part( 'template-parts/content/content', 'services' ); ?>

        <?php get_template_part( 'template-parts/content/content', 'portfolio' ); ?>

        <?php get_template_part( 'template-parts/content/content', 'testimonials' ); ?>

    </main>

<?php get_footer(); ?>