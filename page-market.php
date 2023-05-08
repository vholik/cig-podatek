<?php 

/*
Template Name: Targi
*/

?>

<?php 
    get_header();
?>

<div class="container">
        <?php
          $my_posts = new WP_Query(array(
              'post_type' => 'market_videos',
              'posts_per_page' => -1,
              'orderby'     => 'date',
              'order'       => 'ASC',
          ));

          while ($my_posts->have_posts()) {
              $my_posts->the_post();
              ?>

                  <video className="video-wrapper" muted controls>
                    <source src="<?php the_field('market_video_url'); ?>" type="video/mp4" />
                  </video>

              <?php
          }

          wp_reset_postdata();
        ?>
</div>


<?php 
    get_footer();
?>