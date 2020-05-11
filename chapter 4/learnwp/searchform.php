<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   <label class="screen-reader-text" for="s">
      <?php echo _x( 'Search for:', 'label', 'learnwp' ); ?>
   </label>
   <input type="text" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'learnwp' ); ?>" />
   <input type="submit" id="searchsubmit" value="<?php echo _x( 'Search', 'submit button', 'learnwp' ); ?>">
</form>