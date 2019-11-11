<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-blog' ); ?>>

    <div class="blog-text">
        <?php
            the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

            the_content();
        ?>
    </div>
    
</article>