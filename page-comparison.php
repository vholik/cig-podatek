<?php 

/*
Template Name: Porównanie
*/

?>

<?php 
    get_header();
?>

<div class="images">
      <div class="container">
        <img
          src="<?php the_field('page_comparison_image_1'); ?>"
          alt="Zdjęcie"
          class="image"
          loading="lazy"
        />
      </div>
</div>

<?php 
    get_footer();
?>