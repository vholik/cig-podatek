<?php 

/*
Template Name: O nas
*/

?>

<?php 
    get_header();
?>

<div class="images">
      <div class="container">
        <img
          src="<?php the_field('page_about_image_1'); ?>"
          alt="O nas"
          class="image"
          loading="lazy"
        />
        <img
          src="<?php the_field('page_about_image_2'); ?>"
          alt="O nas"
          class="image"
          loading="lazy"
        />
      </div>
</div>

<?php 
    get_footer();
?>
