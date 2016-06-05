<?php get_header(); ?>


    <!-- Begin Body Content Section -->
      <section class="row">
        <div class="twelve columns">

          <!-- Begin Loop -->

          <?php
            if ( have_posts() ){
              while ( have_posts() ){
                the_post();//end while
              } //end if
            }

           ?>

          <!-- End Loop -->

        </div>
      </section>
    <!-- End Body Content Section -->


<?php get_footer(); ?>
