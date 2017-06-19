
<div class="content">
  <?php get_header(); ?>
  <svg display="none">

      <filter id="turbulence-1">
          <feTurbulence type="fractalNoise" baseFrequency="0.01" numOctaves="2" data-filterId="3"/>
          <feDisplacementMap xChannelSelector="R" yChannelSelector="G" in="SourceGraphic" scale="5"/>
      </filter>

      <filter id="turbulence-2">
          <feTurbulence type="fractalNoise" baseFrequency="0.015" numOctaves="2" data-filterId="3"/>
          <feDisplacementMap xChannelSelector="R" yChannelSelector="G" in="SourceGraphic" scale="5"/>
      </filter>

      <filter id="turbulence-3">
          <feTurbulence type="fractalNoise" baseFrequency="0.02" numOctaves="2" data-filterId="3"/>
          <feDisplacementMap xChannelSelector="R" yChannelSelector="G" in="SourceGraphic" scale="5"/>
      </filter>

      <filter id="turbulence-4">
          <feTurbulence type="fractalNoise" baseFrequency="0.025" numOctaves="2" data-filterId="3"/>
          <feDisplacementMap xChannelSelector="R" yChannelSelector="G" in="SourceGraphic" scale="5"/>
      </filter>

      <filter id="turbulence-5">
          <feTurbulence type="fractalNoise" baseFrequency="0.03" numOctaves="2" data-filterId="3"/>
          <feDisplacementMap xChannelSelector="R" yChannelSelector="G" in="SourceGraphic" scale="5"/>
      </filter>

  </svg>

  <svg display="none">
      <defs>
          <filter id="turbulence-x">
              <feTurbulence type="fractalNoise" baseFrequency="0.01" numOctaves="2" seed="46" numOctaves="2">
                  <animate attributeName="baseFrequency" values="0.01; 0.015; 0.02; 0.025; 0.03; 0.025; 0.02; 0.015; 0.01"
                           repeatCount="indefinite" dur="3.5s"/>
              </feTurbulence>
              <feDisplacementMap xChannelSelector="R" yChannelSelector="G" in="SourceGraphic" scale="5"/>
          </filter>
      </defs>
  </svg>

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
</div>
