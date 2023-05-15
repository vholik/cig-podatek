<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Przykładowy post - Blog Cig podatek</title>
</head>
<body>
  <?php 
    get_header();
  ?>

  <main class="main-blog" style="background-image: url(<?php the_field('post_image'); ?>;)">
    <h1 class="wp-block-heading">Blog Cig podatek</h1>
  </main>
  <section class="single-post">
    <div class="container">
      <article>
        <h2><?php the_title(); ?></h2>
        <div class="post-meta">
          <span class="post-date"><?php the_date(); ?></span>
        </div>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </article>
    </div>
  </section>
  <?php 
    get_footer();
  ?>
</body>
</html>
