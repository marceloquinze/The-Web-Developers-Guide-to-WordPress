      <footer>
         <section class="footer-widgets">
            <div class="container">
               <div class="row">
                  Footer Widgets
               </div>
            </div>            
         </section>
         <section class="copyright">
            <div class="container">
               <div class="row">
                  <div class="copyright-text col-md-6">
                     <p>Copyright</p>
                  </div>
                  <nav class="footer-menu col-md-6 text-left text-md-right">
                     <?php 
                        wp_nav_menu(
                           array(
                              'theme_location'  => 'learnwp_footer_menu',
                              'depth'           => 1
                           )
                        );
                     ?>               
                  </nav>
               </div>
            </div>         
         </section>
      </footer>
   </div>
<?php wp_footer(); ?>   
</body>
</html>



