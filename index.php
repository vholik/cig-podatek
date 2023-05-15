<?php
get_header();
?>
    <main class="main" style="background-image: url(<?php the_field( 'hero_bg' ); ?>;)">
      <div class="container">
        <h1 class="main-title">
        <?php the_field( 'hero_title'); ?>
        </h1>
        <div class="main__inner">
          <div class="left">
            <h1 class="main-info-title"><?php the_field( 'hero_subtitle' ); ?></h1>
            <?php echo do_shortcode( '[contact-form-7 id="162" title="Zostaw numer telefonu - oddzwonimy"]' ) ?>
          </div>
          <div class="contact-info">
            <a href="mailto:<?php the_field( 'email', 2 ); ?>" class="email"
              ><?php the_field( 'email', 2 ); ?>
            </a>
            <a href="tel:693546135" class="phone">
              <svg
                width="41"
                height="41"
                viewBox="0 0 41 41"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M6.10738 3.04951C8.30955 0.854341 12.0019 1.4682 13.5609 4.05831L13.5718 4.07634L17.1656 10.2178C18.2239 12.064 17.9569 14.4373 16.378 16.0112L15.782 16.6054C17.8925 19.9157 21.0986 23.1907 24.3394 25.1549L24.9318 24.6299C26.5107 23.0906 28.8675 22.8376 30.7043 23.8838L30.7175 23.8913L36.7991 27.4277C38.3048 28.1484 39.0972 29.5412 39.2594 30.9317C39.4215 32.3209 38.9768 33.8288 37.8955 34.9068L35.8462 36.9495C33.7185 39.0704 30.2549 40.0091 27.2992 38.6699C23.4086 37.0799 17.5734 34.0797 12.2552 28.7785C6.92315 23.4634 3.91758 17.4652 2.33847 13.7959C0.991348 10.8585 1.91965 7.41443 4.03249 5.28815L6.06008 3.09858C6.07551 3.08191 6.09128 3.06555 6.10738 3.04951ZM8.54108 5.43885L6.52049 7.62085C6.50506 7.63752 6.48929 7.65388 6.4732 7.66993C5.19411 8.94494 4.76854 10.92 5.45001 12.3918C5.45658 12.406 5.46294 12.4203 5.46911 12.4346C6.96627 15.9169 9.76575 21.4821 14.6703 26.3711C19.5836 31.2688 25.0016 34.0545 28.6251 35.5321C28.6483 35.5416 28.6713 35.5516 28.6941 35.5621C30.1706 36.2414 32.152 35.8171 33.4311 34.5421L35.4804 32.4994C35.7652 32.2155 35.9182 31.7657 35.8668 31.325C35.8187 30.9122 35.6141 30.6295 35.2982 30.4863C35.2456 30.4625 35.1942 30.436 35.1444 30.407L29.0044 26.8368C28.4664 26.5334 27.7764 26.6088 27.3075 27.0762C27.2839 27.0998 27.2595 27.1226 27.2345 27.1448L25.6976 28.5066C25.1683 28.9756 24.4035 29.0703 23.7752 28.7446C19.1676 26.3563 14.6717 21.6716 12.1435 17.1713C11.7699 16.5063 11.8853 15.6748 12.426 15.1359L13.9629 13.6038C14.4318 13.1364 14.5075 12.4486 14.2031 11.9123L10.6278 5.80264C10.1411 5.00444 9.07614 4.93161 8.54108 5.43885Z"
                  fill="#171716"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M27.7698 13.2303C26.9133 12.3737 25.5901 12.0667 24.6546 12.3786C23.6811 12.703 22.6288 12.1769 22.3043 11.2034C21.9798 10.2299 22.506 9.17771 23.4795 8.85321C25.8883 8.05026 28.6528 8.85802 30.3975 10.6027C32.1421 12.3473 32.9499 15.1118 32.1469 17.5207C31.8224 18.4942 30.7702 19.0203 29.7967 18.6958C28.8232 18.3713 28.2971 17.3191 28.6216 16.3456C28.9335 15.41 28.6264 14.0869 27.7698 13.2303Z"
                  fill="#171716"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M32.3716 8.62825C29.3408 5.59742 24.9351 4.53077 20.9875 5.59358C20.0582 5.84378 19.1021 5.29325 18.8519 4.36395C18.6017 3.43464 19.1522 2.47847 20.0815 2.22827C25.1953 0.851482 30.8965 2.22443 34.836 6.16388C38.7754 10.1033 40.1484 15.8046 38.7716 20.9184C38.5214 21.8477 37.5652 22.3982 36.6359 22.148C35.7066 21.8978 35.1561 20.9416 35.4063 20.0123C36.4691 16.0647 35.4024 11.6591 32.3716 8.62825Z"
                  fill="#171716"
                />
              </svg>
              <p><?php the_field( 'phone', 2); ?></p></a
            >
          </div>
        </div>
      </div>
    </main>
    <section id="about" class="about">
      <div class="container">
        <div class="info">
          <div class="container">
          <!--<div class="about__blocks">-->
          <!--  <div class="col">-->
          <!--    <h1 class="section-title"><?php the_field('news_left_title'); ?></h1>-->
              
          <!--    <p class="info-desc">-->
          <!--      <?php the_field('news_left_description'); ?>-->
          <!--    </p>-->
              
          <!--  </div>-->
          <!--  <div class="col">-->
          <!--    <h1 class="section-title"><?php the_field('news_right_title'); ?></h1>-->
              
          <!--    <p class="info-desc">-->
          <!--      <?php the_field('news_right_description'); ?>-->
          <!--    </p>-->
          <!--  </div>-->
        
          <!--</div>-->
          <h1 class="section-title"><?php the_field('about_title'); ?></h1>
              
              <p class="info-desc">
                <?php the_field('about_subtitle'); ?>
              </p>
              <div class="about__inner">
                <div class="blocks-wrapper">
                  <div class="left">
                    <div class="item">
                      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-red.png" alt="Arrow" />
                      <?php the_field('about_marker_1'); ?>
                    </div>
                    <div class="item">
                      <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-red.png" alt="Arrow" />
                      <?php the_field('about_marker_2'); ?>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <img src="<?php the_field('about_image'); ?>" alt="Trucks" class="trucks" />
        <div class="about__inner">
          <div class="blocks-wrapper">
            <div class="left">
              <div class="item">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-red.png" alt="Arrow" />
                <?php the_field('about_advantage_1'); ?>
              </div>
              <div class="item">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-red.png" alt="Arrow" />
                <?php the_field('about_advantage_2'); ?>
              </div>
              <div class="item">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-red.png" alt="Arrow" />
                <?php the_field('about_advantage_3'); ?>
              </div>
            </div>
            <div class="right">
              <div class="item">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-red.png" alt="Arrow" />
                <h1>CIĄGNIK <?php the_field('about_price_tractor'); ?><span class="price">ZŁ</span></h1>
              </div>
              <div class="item">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/images/arrow-red.png" alt="Arrow" />
                <h1>NACZEPA <?php the_field('about_price_semitrailer'); ?><span class="price">ZŁ</span></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="line">
        <div class="container">
          <p><?php the_field('about_red_advantage_1'); ?></p>
          <p><?php the_field('about_red_advantage_2'); ?></p>
          <p><?php the_field('about_red_advantage_3'); ?></p>
        </div>
      </div>
    </section>
    <!-- gallery  -->
    <div class="gallery" id="gallery">
      <div class="container">
        <h1 class="gallery__title uppercase">Galeria</h1>
        <div class="gallery__inner">

          <?php
          $my_posts = new WP_Query(array(
              'post_type' => 'gallery',
              'posts_per_page' => -1,
              'orderby'     => 'date',
              'order'       => 'ASC',
          ));

          while ($my_posts->have_posts()) {
              $my_posts->the_post();
              ?>

                  <div class="slide">
                    <img
                      src="<?php the_field('gallery_image'); ?>"
                      alt="<?php the_title(); ?>"
                      loading="lazy"
                    />
                  </div>

              <?php
          }

          wp_reset_postdata();
          ?>
        </div>
        <div class="bottom">
          <div class="slider-btns-wrapper">
            <button type="button" class="prev slider-btn">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/slider-arrow-left.svg" alt="Previous" />
            </button>
            <button type="button" class="next slider-btn">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/slider-arrow-right.svg" alt="Next" />
            </button>
          </div>
          <div class="bar">
            <div class="bar-progress"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="gminy" id="gminy">
      <div class="container">
        <div class="gminy__inner">
          <h1 class="gminy__title">
            <div class="line">
              <div class="line-inner uppercase">Nasze Gminy</div>
            </div>
          </h1>
          <div class="gminy-wrapper">

          <?php
          $my_posts = new WP_Query(array(
              'post_type' => 'gminy',
              'posts_per_page' => -1,
              'orderby'     => 'date',
              'order'       => 'ASC',
          ));

          while ($my_posts->have_posts()) {
              $my_posts->the_post();
              ?>

                <div class="gmina fade-in">
                  <div class="gmina__inner">
                    <img
                      src="<?php the_field('gmina_image'); ?>"
                      alt="Gmina <?php the_title(); ?>"
                      class="gmina__image"
                    />
                  </div>
                  <a href="<?php the_field('gmina_link'); ?>" target="_blank"
                    ><p class="gmina__name"><?php the_title(); ?></p></a
                  >
                </div>

              <?php
          }

          wp_reset_postdata();
          ?>
           
          </div>
        </div>
      </div>
    </div>
    <div class="team" id="team">
      <div class="container">
        <h1 class="team__title uppercase">Nasz team</h1>
        <div class="team-slider">
          
        <?php
          $my_posts = new WP_Query(array(
            'post_type' => 'team',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
          ));

          while ($my_posts->have_posts()) {
              $my_posts->the_post();
              ?>

              <div class="slide">
                  <div class="slide__img">
                      <img src="<?php the_field('team_image'); ?>" alt="Bartek" loading="lazy" />
                  </div>
                  <h2 class="slide__name"><?php the_title(); ?></h2>
                  <p class="slide__position">(<?php the_field('employment_time'); ?>)</p>
                  <p class="slide__position"><?php the_field('team_position'); ?></p>
              </div>

              <?php
          }
          wp_reset_postdata();
          ?>
        </div>
        <div class="bottom">
          <div class="slider-btns-wrapper">
            <button type="button" class="team-prev slider-btn">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/slider-arrow-left.svg" alt="Previous" />
            </button>
            <button type="button" class="team-next slider-btn">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/images/slider-arrow-right.svg" alt="Next" />
            </button>
          </div>
          <div class="bar">
            <div class="team-bar-progress"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="company" id="company">
      <div class="container">
        <h1 class="company__title uppercase">Zaufali nam:</h1>
        <div class="company-slider">
        <?php
          $my_posts = new WP_Query(array(
            'post_type' => 'company',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
          ));

          while ($my_posts->have_posts()) {
              $my_posts->the_post();
              ?>
              <div class="slide">
                  <div class="slide__img">
                      <img src="<?php the_field('company_image'); ?>" alt="<?php the_title(); ?>" loading="lazy" />
                  </div>
              </div>
              <?php
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="contact" id="contact">
        <div class="left">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/images/contact-img.png" alt="Image" />
        </div>
        <div class="right box">
          <h1 class="section-title">Napisz do nas</h1>
          <h1 class="contact__title">
            Zostaw numer telefonu oddzwonimy i powiemy ile zaoszczędzisz
          </h1>
          <?php echo do_shortcode( '[contact-form-7 id="140" title="Forma kontaktu" class:contact-form]' ) ?>
        </div>
      </div>
    </div>
    <div class="container">
      <h1 class="section-title">Kontakt</h1>
    </div>
    

<?php
    
  get_footer(  );

?>
