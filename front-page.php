<!-- Startseite -->
<?php get_header(); ?>

<article id="intro" class="intro-article">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="intro-image">
        <?php 

          //  Titelbild
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
<article id="magazinausschnitt-1">

  <?php echo esc_html( get_field('text1') ); ?>
  
  <?php 
    $image2 = get_field('bild1');
    if( !empty( $image2 ) ): ?>

    <div class="bild bild1">
      <img class="myImg" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
    </div>
  <?php endif; ?>


  <div class="absatz_1">
    <?php the_field('absatz_1'); ?>
  </div>
 
</article>

<!-- Absatz 2 -->

<article id="magazinausschnitt-2">

<?php 
  $image2 = get_field('bild2');
      if( !empty( $image2 ) ): ?>

      <div class="bild bild2">
        <img class="myImg" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
      </div>
    <?php endif; ?>

  <div class="absatz_2">
    <?php the_field('absatz_2'); ?>
  </div>

</article>

<!-- Absatz 3 -->

<article id="magazinausschnitt-3">
  <?php 
    $image2 = get_field('bild3');
      if( !empty( $image2 ) ): ?>

    <div class="bild bild3">
      <img class="myImg" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
    </div>
  <?php endif; ?>

  <div class="absatz_3">
    <?php the_field('absatz_3'); ?>
  </div>

</article>

<!-- Absatz 4 -->
<article id="magazinausschnitt-4">
 
    <?php 
      $image2 = get_field('bild4');
      if( !empty( $image2 ) ): ?>

    <div class="bild bild4">  
      <img class="myImg" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
    </div>

  <?php endif; ?>
  

  <div class="absatz_4">
    <?php the_field('absatz_4'); ?>
  </div>
 
</article>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

</div>




<!-- Wenn die Seite leer ist: -->
<?php endwhile; else : ?>
  <p>Aktuell gibt es keinen Inhalt auf dieser Seite.</p> 
<?php endif; ?>

<!-- Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<?php get_footer(); ?>
