<footer class="footer">
      <div class="container">
        <img
          src="<?php echo bloginfo('template_url'); ?>/assets/images/cig-logo-footer.svg"
          alt="Logo"
          class="logo"
        />

        <div class="footer__inner">
          <div class="col">
            <h3 class="footer__title">Adres:</h3>
            <ul>
              <a><li><?php the_field( 'adress_street', 2 ); ?></li></a>
              <a><li><?php the_field( 'adress_town', 2 ); ?></li></a>
            </ul>
          </div>
          <div class="col">
            <h3 class="footer__title">Kontakt:</h3>
            <ul>
              <a href="tel:48639546135"><li>+48 <?php the_field( 'phone', 2 ); ?></li></a>
              <a href="tel:753000463"><li><?php the_field( 'fax_phone', 2 ); ?></li></a>
              <a href="mailto:<?php the_field( 'email', 2 ); ?>"
                ><li><?php the_field( 'phone', 2 ); ?></li></a
              >
            </ul>
            <h3 class="footer__title">Dane do faktury:</h3>
            <ul>
              <a><li><?php the_field( 'invoice_name', 2 ); ?></li></a>
              <a><li><?php the_field( 'invoice_street', 2 ); ?></li></a>
              <a><li><?php the_field( 'invoice_town', 2 ); ?></li></a>
              <a><li>Nip: <?php the_field( 'invoice_nip', 2); ?></li></a>
            </ul>
          </div>
          <div class="col">
            <div class="social-wrapper">
              <a href="<?php the_field( 'link_facebook', 2 ); ?>" target="_blank"
                ><img src="<?php echo bloginfo('template_url'); ?>/assets/images/socials/facebook.svg" alt="Facebook"
              /></a>
              <a href="<?php the_field( 'link_instagram', 2 ); ?>" target="_blank"
                ><img
                  src="<?php echo bloginfo('template_url'); ?>/assets/images/socials/instagram.svg"
                  alt="Instagram"
              /></a>
              <a
                href="<?php the_field( 'link_linkedin', 2 ); ?>"
                target="_blank"
                ><img
                  src="<?php echo bloginfo('template_url'); ?>/assets/images/socials/linked-in.svg"
                  alt="Linked-in"
              /></a>
            </div>
          </div>
          <div class="col">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.6090066218067!2d16.946115514959917!3d51.09722294843226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470fc1bc072a12af%3A0xf28e64fe33ff3167!2sTrawowa%208%2C%2050-001%20Wroc%C5%82aw!5e0!3m2!1spl!2spl!4v1665140002323!5m2!1spl!2spl"
              width="100%"
              height="300"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </footer>
    
    <?php
    
  wp_footer(  );

    ?>
  </body>
</html>