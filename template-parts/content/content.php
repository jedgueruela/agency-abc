<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-blog' ); ?>>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="single-blog-img">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail( 'medium_large', array(
                    'class' => 'img-fluid'
                ) ); ?>
            </a>
        </div>
    <?php endif; ?>

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

    <?php the_title( sprintf( '<span><a class="btn-read-more" href="%s">%s <span class="sr-only">', esc_url( get_permalink() ), __( 'Continue reading', 'agency-abc' ) ), '</span></a></span>' ); ?>
    
</article>