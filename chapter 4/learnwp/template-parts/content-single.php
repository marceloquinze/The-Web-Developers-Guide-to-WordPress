<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p>Published by <?php the_author_posts_link(); ?> 
            on <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
            <br />
            <?php if( has_category() ): ?>
                Categories: <span><?php the_category( ' ' ); ?></span>
            <br />
            <?php endif; ?>
            <?php if( has_tag() ): ?>
                Tags: <span><?php the_tags( '', ', ' ); ?></span>
            <?php endif; ?>         
            </p>
        </div>       
        <div class="post-thumbnail">
            <?php 
            if( has_post_thumbnail() ): 
                the_post_thumbnail( 'learnwp-blog', array( 'class' => 'img-fluid') );
            endif;
            ?>
        </div>
    </header>    
    <div class="content">
       <?php 
       wp_link_pages(
          array(
             'before'  => '<p class="inner-pagination">Pages',
             'after'   => '</p>',
          )
       );
       ?>                                                            
        <?php the_content(); ?>
    </div>
</article>