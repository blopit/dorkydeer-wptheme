
  <!-- First Blog Post -->

  <div class="post">
    <div class="post-background"></div>
    <div class="post-main">
      <div class='vbox'>

        <h2 class="blog-post-title fancy-links squiggle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="data">
          posted on
          <?php the_date(); ?>
        </p>
      </div>

      <div class="seperator-container">
        <div class="seperator-2">
        </div>
      </div>
      </br>
      <?php the_content(); ?>
    </div>
  </div>
