<!-- Startseite -->
<?php get_header(); ?>

<article class="intro-article">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="intro-image">
        <?php 
          // Titelbild
          $image = get_field('img');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
<!-- Titel -->
        <div class="intro-text">
          <h1><?php the_title() ?></h1>
          <p><?php the_content(); ?></p>
        </div>
      </div>
</article>



<!-- Absatz 1 -->
<article>
  <?php echo esc_html( get_field('text1') ); ?>
  
    <?php 
      $image2 = get_field('bild1');
      if( !empty( $image2 ) ): ?>

      <div class="bild1">
        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
      </div>
    <?php endif; ?>
  

  <div class="absatz_1">
    <?php the_field('absatz_1'); ?>
  </div>
 
</article>

<!-- Absatz 2 -->

<article>
<?php 
  $image2 = get_field('bild2');
      if( !empty( $image2 ) ): ?>

      <div class="bild2">
        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
      </div>
    <?php endif; ?>

<div class="absatz_2">
    <?php the_field('absatz_2'); ?>
  </div>

</article>

<!-- Absatz 3 -->

<article>
<?php 
  $image2 = get_field('bild3');
      if( !empty( $image2 ) ): ?>

      <div class="bild3">
        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
      </div>
    <?php endif; ?>

<div class="absatz_3">
    <?php the_field('absatz_3'); ?>
  </div>

</article>


<article>
 
  
    <?php 
      $image2 = get_field('bild4');
      if( !empty( $image2 ) ): ?>

      <div class="bild4">
        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
      </div>
    <?php endif; ?>
  

  <div class="absatz_4">
    <?php the_field('absatz_4'); ?>
  </div>
 
</article>


  <!-- Wenn die Seite leer ist: -->
  <?php endwhile; else : ?>
    <p>Aktuell gibt es keinen Inhalt auf dieser Seite.</p> 
  <?php endif; ?>

  <!-- Mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<?php get_footer(); ?>
