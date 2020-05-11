<?php 

/*
Template Name: Home Page
*/

get_header(); ?>
      <div class="content-area">
         <main>
            <section class="slider">
               <div class="flexslider">
                 <ul class="slides">
                  <?php  

                  $args = array(
                     'post_type'      => 'post',
                     'category_name'  => 'slider',
                     'posts_per_page' => 3,
                  );

                  $slider_loop = new WP_Query( $args );

                  if( $slider_loop->have_posts() ):
                     while( $slider_loop->have_posts() ):
                        $slider_loop->the_post();
                  ?>
                      <li>
                        <?php the_post_thumbnail( 'learnwp-slider', array( 'class' => 'img-fluid' ) ); ?>
                        <div class="container">
                           <div class="slider-details-container">
                              <div class="slider-title">
                                 <h1><?php the_title(); ?></h1>
                              </div>
                              <div class="slider-description">
                                 <div class="subtitle"><?php the_excerpt(); ?></div>
                                 <a class="link" href="<?php the_permalink(); ?>">Read More...</a>
                              </div>
                           </div>
                        </div>
                      </li>
                  <?php 
                  endwhile;
                  wp_reset_postdata();
                  endif;
                  ?>
                 </ul>
               </div>
            </section>
            <section class="popular-products">
               <div class="container">
                  <div class="section-title">
                     <h2>Popular Products</h2>
                  </div>               
               </div>
            </section>
            <section class="new-arrivals">
               <div class="container">
                  <div class="section-title">
                     <h2>New Arrivals</h2>
                  </div>               
               </div>
            </section>
            <section class="deal-of-the-week">
               <div class="container">
                  <div class="section-title">
                     <h2>Deal of the Week</h2>
                  </div>               
                  <div class="row">                  
                  </div>
               </div>
            </section>
            <section class="site-blog">
               <div class="container">
                  <div class="section-title">
                     <h2>Latest News</h2>
                  </div>
                  <div class="row">
                     <?php
                     
                     $args = array(
                        'post_type'           => 'post',
                        'posts_per_page'      => 2,
                        'ignore_sticky_posts' => true,
                     );

                     $blog_posts = new WP_Query( $args );

                     if( $blog_posts->have_posts() ):
                        while( $blog_posts->have_posts() ): $blog_posts->the_post();
                           ?>
                           <article class="col-md-6">
                              <div class="post-thumbnail">
                                 <a href="<?php the_permalink(); ?>">
                                    <?php 
                                       if( has_post_thumbnail() ){
                                          the_post_thumbnail( 
                                             'learnwp-blog', 
                                             array( 
                                                'class' => 'img-fluid' 
                                             ) 
                                          );
                                       }
                                    ?>
                                 </a>
                              </div>
                              <h3>
                                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                              </h3>
                              <span class="pub-date">
                                 <a href="<?php the_permalink(); ?>">
                                    <?php echo get_the_date(); ?>
                                 </a>
                              </span>
                              <div class="excerpt"><?php the_excerpt(); ?></div>
                           </article>
                           <?php
                        endwhile;
                        wp_reset_postdata();
                     else:
                     ?>
                        <p>Nothing to display</p>
                     <?php endif; ?>
                  </div>
               </div>                                   
            </section>
         </main>
      </div>
<?php get_footer(); ?>