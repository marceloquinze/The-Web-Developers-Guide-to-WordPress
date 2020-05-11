<?php get_header(); ?> 
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" />  
   <div class="content-area">
      <main>
         <div class="container">
            <?php
            if( have_posts() ):
               while( have_posts() ): the_post();
                  ?>
                     <article>
                        <h1><?php the_title(); ?></h1>
                        <div class="content"><?php the_content(); ?></div>
                     </article>
                  <?php
               endwhile;
            else: ?>
               <p>Nothing to display</p>
            <?php endif; ?>
         </div>
      </main>
   </div>
<?php get_footer(); ?>