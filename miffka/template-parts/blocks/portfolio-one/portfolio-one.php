<?php 
global $count_gallery ;
$count_gallery++;
?>
<section id="portfolio-one" class="portfolio-one">
  <div class="container">

    <div class="portfolio-one-wrap">
      <div class="portfolio-one-content">
        <?php if ( get_field('title_portfolio_one') ) : ?>
        <div class="portfolio-one__title">
          <?= get_field('title_portfolio_one'); ?>
        </div>
        <?php endif; ?>

        <!-- /.portfolio-about__title -->
        <?php if ( get_field('descr_portfolio_one') ) : ?>
        <div class="portfolio-one__content">
          <?= get_field('descr_portfolio_one'); ?>
        </div>
        <?php endif; ?>

        <!-- /.portfolio-one__content -->

      </div>
      <!-- /.portfolio-one-content -->
      <?php 
        $images = get_field('img_portfolio_one');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $images ): ?>
      <div class="portfolio-one-slider">
        <?php foreach( $images as $image_id ): ?>
        <div class="portfolio-one-slider-item">
          <div class="portfolio-one-slider-item-wrap">

            <a data-fancybox="portfolio-one-<?= $count_gallery  ?>"
              data-src="<?= wp_get_attachment_image_url( $image_id, $size ); ?>" href=""
              class="portfolio-one-slider-item__link">

              <div class="portfolio-one-slider-item-img">
                <?= wp_get_attachment_image( $image_id, $size ); ?>
              </div>
              <!-- /.portfolio-one-slider-item-img -->
            </a>

          </div>
          <!-- /.portfolio-one-slider-item-wrap -->
        </div>
        <!-- /.portfolio-one-slider-item -->
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <!-- /.portfolio-one-slider -->

    </div>
    <!-- /.portfolio-one-wrap -->

  </div>
  <!-- /.container -->
</section>
<!-- /.portfolio-one -->