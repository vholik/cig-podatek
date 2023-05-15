<?php
  get_header();
?>
<main class="main-blog" style="background-image: url(<?php the_field( 'blog_bg' ); ?>;)">
  <h1 class="wp-block-heading">Blog Cig podatek</h1>
</main>
<section class="posts-section">
  <div class="container">
    <h1>Nasze aktualności</h1>
    <div class="posts">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $my_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'paged'        => $paged
        ));

        while ($my_posts->have_posts()) {
            $my_posts->the_post();
      ?>
      <div class="post-wrapper">
        <a href="<?php echo get_permalink(); ?>">
          <img src="<?php the_field('post_image'); ?>" alt="" loading="lazy" />
        </a>
        <div class="post-tittle">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-red.png" alt="Arrow" />
          <?php the_title(); ?>
        </div>
      </div>
      <?php 
          }
          wp_reset_postdata();
      ?>
    </div>
    <div class="pagination">
      <?php
        $big = 999999999;
        $current_page = max( 1, get_query_var('paged') ); 
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $my_posts->max_num_pages,
            'prev_text' => '<button type="button" class="blog-btn"><img src="'.get_bloginfo('template_url').'/assets/images/slider-arrow-left.svg" alt="Previous" /></button>',
            'next_text' => '<button type="button" class="blog-btn"><img src="'.get_bloginfo('template_url').'/assets/images/slider-arrow-right.svg" alt="Next" /></button>',
            'before_page_number' => '<li><span class="page-number ' . ($current_page == '%#%' ? 'current-page' : '') . '">', 
            'after_page_number' => '</span></li>',
            'mid_size' => 2
        ) );
      ?>
    </div>
  </div>
</section>
<?php
  get_footer();
?>
