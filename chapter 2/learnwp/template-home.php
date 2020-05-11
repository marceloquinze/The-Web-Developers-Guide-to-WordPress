<?php 

/*
Template Name: Home Page
*/

get_header(); ?>
      <div class="content-area">
         <main>
            <section class="slider">Slider</section>
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
                     if( have_posts() ):
                        while( have_posts() ): the_post();
                           ?>
                              <article>
                                 <h3><?php the_title(); ?></h3>
                                 <div class="content"><?php the_content(); ?></div>
                              </article>
                           <?php                           
                        endwhile;
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