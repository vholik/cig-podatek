<?php 

/*
Template Name: Stawki
*/

?>

<?php 
    get_header();
?>

<div class="images">
      <div class="container">
        <img
          alt="Zdjęcie"
          src="<?php the_field('page_pricelist_image_1'); ?>"
          class="image"
          loading="lazy"
        />
      </div>
</div>

<?php 
    get_footer();
?>