
  <!-- First Blog Post -->
  <h2 class="blog-post-title fancy-links"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <p>
      <i class="fa fa-clock-o" aria-hidden="true"></i>
       <?php the_date(); ?> by <a href="#"><?php the_author(); ?>
       </a>
      </p>

    <hr>

  <?php the_excerpt(); ?>


    <hr>
