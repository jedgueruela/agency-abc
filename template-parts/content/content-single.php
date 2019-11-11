<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-blog' ); ?>>

    <div class="blog-meta">
        
        <span class="comments-type">
            <i class="fa fa-comment-o"></i>
            <?php comments_number(); ?>
        </span>

        <?php the_date( 'M d, Y', '<span class="date-type"><i class="fa fa-calendar"></i> <time>', '</time></span>' ); ?>

    </div>

    <div class="blog-text">
        <?php
            the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

            the_content();
        ?>
    </div>
    
</article>