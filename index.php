<?php get_header(); ?> <!-- Gets information from header.php to display on page -->


    <!-- Begin Body Content Section -->
      <section class="row">
        <div class="twelve columns">

          <!-- Begin Loop -->

          <?php
              if ( have_posts() ){
                  while ( have_posts() ){
                      the_post(); ?>

                          <h3><?php the_title(); //this php calls up each post title ?></h3>
                          <?php the_excerpt(); //ths pulls a paragraph of content from each post?>

            <?php } //end while statement
          } //end if statement
            ?>

          <!-- End Loop -->

        </div>
      </section>
    <!-- End Body Content Section -->


<?php get_footer(); ?> <!-- Gets information from footer.php to display on page -->
