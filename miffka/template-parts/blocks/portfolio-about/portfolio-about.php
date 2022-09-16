<section id="portfolio-about" class="portfolio-about">
  <div class="portfolio-about-content">
    <div class="portfolio-about-left">
      <div class="portfolio-about-left-wrap">

        <div class="portfolio-about-left-img">
          <?php
          if ( get_field('img_about_prd') ) {
            $attachment_id = get_field('img_about_prd');
            $size = "full"; // (thumbnail, medium, large, full or custom size)
            echo wp_get_attachment_image( $attachment_id, $size );
          }
          ?>
        </div>
        <!-- /.portfolio-about-left-img -->

      </div>
      <!-- /.portfolio-about-left-wrap -->
    </div>
    <!-- /.portfolio-about-left -->
    <div class="portfolio-about-right">
      <div class="portfolio-about-right-wrap">

        <div class="portfolio-about-right-content">
          <?php if ( get_field('title_about_prd') ) : ?>
          <div class="portfolio-about__title">
            <?= get_field('title_about_prd'); ?>
          </div>
          <?php endif; ?>


          <!-- /.portfolio-about__title -->
          <?php if ( get_field('descr_about_prd') ) : ?>
          <div class="portfolio-about__content">
            <?= get_field('descr_about_prd'); ?>
          </div>
          <?php endif; ?>

          <a data-fancybox="" data-src="#contact_us_pop_up" href="javascript:;"
            class="portfolio-about__contact-us button p-button">
            Зв'яжіться з нами
          </a>
          <!-- /.portfolio-about__contact-us button p-button -->
        </div>
        <!-- /.portfolio-about-right-content -->

      </div>
      <!-- /.portfolio-about-right-wrap -->
    </div>
    <!-- /.portfolio-about-right -->
  </div>
  <!-- /.portfolio-about-content -->
</section>