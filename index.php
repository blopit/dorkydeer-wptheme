<?php get_header(); ?>

<div class="col-md-8">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

              get_template_part( 'content', get_post_format() );

            endwhile;        endif;
            ?>

            <ul class="pagination">
              <li><?php next_posts_link( 'Previous' ); ?></li>
              <li><?php previous_posts_link( 'Next' ); ?></li>
            </ul>


</div>

      <div class="col-md-4">
        		<?php get_sidebar(); ?>
      </div>

      <?php get_footer(); ?>
