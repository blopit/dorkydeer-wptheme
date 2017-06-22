<svg height="0" version="1.1" >

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
  <!-- First Blog Post -->

  <div class="post">
    <div class="post-background"></div>
    <div class="post-main">
      <div class='vbox'>

        <h2 class="blog-post-title fancy-links squiggle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="data fancy-header">
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
