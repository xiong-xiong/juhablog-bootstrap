<?php get_header();?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="xiong-main-content">
          <ul class="xiong-filters">
            <?php
                $args= array(
                  'include'          =>   22,
                  'title_li'          => __('')
                );
              wp_list_categories( $args );
            ?>
            <?php
                $args= array(
                  'child_of'          =>   22,
                  'title_li'          => __(''),
                  'depth'             => 1
                );
              wp_list_categories( $args );
            ?>
          </ul>
        <div id="main-content">
          <div id="inside">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'templates/articlebox'); ?>


        <?php endwhile;?>
        <?php else : ?>
          <p id="comingsoon">Content coming soon!</p>
        <?php endif; ?>
        <div class="xiong-pagination">
         <center>
           <?php get_template_part( 'templates/pagination'); ?>
         </center>

       </div><!--sivutus -->
        </div><!-- inside-->
        </div><!-- main-content-->


      </div><!--main-content -->

      </div><!--/col8 -->
      <div class="col-md-4">
        <aside class="xiong-front-sidebar">
          <?php dynamic_sidebar('cat_sidebar' ); ?>
        </aside>
      </div><!--/col4-->
    </div><!--/row -->



  </div><!--/container -->
</section>



<?php get_footer();?>
