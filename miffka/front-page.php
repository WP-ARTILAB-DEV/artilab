<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miffka
 */

get_header();
?>



<?php
	the_content();
		?>

<div class="main-content">

  <section class="home-block"
    style="background-image: url(<?php the_field('background_hero') ?>); visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
    <div class="home-block-content">
      <div class="container">
        <div class="home-block-content-wrap">
          <?php if ( get_field('title_hero') ) : ?>
          <h1 class="home-block__title">
            <?php echo get_field('title_hero'); ?>
          </h1>
          <?php endif; ?>
          <!-- /.home-block__title -->
          <?php if ( get_field('description_hero') ) : ?>
          <p class="home-block__text">
            <?php echo get_field('description_hero'); ?>
          </p>
          <?php endif; ?>
          <!-- /.home-block__text -->
          <a data-fancybox="" data-src="#contact_us_pop_up" href="javascript:;" class="button home-block__contact-us">
            <?php if ( get_field('button_text_hero') ) : ?>
            <?php echo get_field('button_text_hero'); ?>
            <?php endif; ?>
          </a>
        </div>
        <!-- /.home-block-content-wrap -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.home-block-content -->
  </section>
  <!-- /.home-block -->

  <section id="portfolio" class="offer">
    <div class="container">
      <?php if ( get_field('title_offer') ) : ?>
      <div class="block__title">
        <?php echo get_field('title_offer'); ?>
      </div>
      <?php endif; ?>

      <!-- /.block__title -->
      <div class="offer-content">

        <div class="offer-slider">
          <?php if ( have_rows('offers_rep') ) : ?>

          <?php while( have_rows('offers_rep') ) : the_row(); ?>

          <div class="offer-slider-item">
            <div class="offer-slider-item-wrap">
              <a href="<?= get_the_permalink( get_sub_field('title') ); ?>" class="">
                <div class="offer-slider-item-bgi">
                  <?php
									if ( get_sub_field('image') ) {
										$attachment_id = get_sub_field('image');
										$size = "full"; // (thumbnail, medium, large, full or custom size)
										echo wp_get_attachment_image( $attachment_id, $size );
									}
									?>

                </div>
                <div class="offer-slider-item__label">
                  <?= get_the_title( get_sub_field('title') ); ?>
                </div>
                <!-- /.offer-slider-item__label -->
                <div class="offer-slider-item-content">
                  <div class="offer-slider-item__title">
                    <?= get_the_title( get_sub_field('title') ); ?>
                  </div>
                  <!-- /.offer-slider-item__title -->
                  <div class="offer-slider-item__text">
                    <?= get_the_excerpt( get_sub_field('title') ); ?>
                  </div>
                  <!-- /.offer-slider-item__text -->
                </div>
                <!-- /.offer-slider-item-content -->
              </a>
            </div>
            <!-- /.offer-slider-item-wrap -->
          </div>
          <!-- /.offer-slider-item -->
          <?php endwhile; ?>

          <?php endif; ?>

        </div>
        <!-- /.offer-slider -->

      </div>
      <!-- /.offer-content -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.offer -->

  <section class="offer-artilab">
    <div class="container container-absolute"
      style="background-image:url(<?= get_stylesheet_directory_uri() ?>/assets/img/offer-img-1.png)"></div>
    <div class="black-line-offer"></div>
    <div class="white-wraper">
      <div class="container">
        <div class="wrap-offer-one">
          <div class="left-col">
            <?php if ( get_field('subtitle_offer_1') ) : ?>
            <div class="subtitle"><?= get_field('subtitle_offer_1'); ?></div>
            <?php endif; ?>
            <?php if ( get_field('title_offer_1') ) : ?>
            <h2><?= get_field('title_offer_1'); ?></h2>
            <?php endif; ?>

            <?php if ( get_field('description_offer_1') ) : ?>
            <p><?= get_field('description_offer_1'); ?></p>
            <?php endif; ?>

            <a data-fancybox="" data-src="#contact_us_pop_up" href="javascript:;" class="btn-offer">Зв'яжіться з
              нами</a>
          </div>
          <div class="righ-col">
            <?php
          if ( get_field('image_offer_1') ) {
            $attachment_id = get_field('image_offer_1');
            $size = "full"; // (thumbnail, medium, large, full or custom size)
            echo wp_get_attachment_image( $attachment_id, $size );
          }
          ?>

            <a data-fancybox="" data-src="#contact_us_pop_up" href="javascript:;" class="btn-offer">Зв'яжіться з
              нами</a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="offer-artilab-two">
    <div class="container">
      <div class="wrap-offer-two">
        <div class="left-col">
          <?php
          if ( get_field('image_offer_2') ) {
            $attachment_id = get_field('image_offer_2');
            $size = "full"; // (thumbnail, medium, large, full or custom size)
            echo wp_get_attachment_image( $attachment_id, $size );
          }
          ?>
        </div>
        <div class="righ-col">
          <?php if ( get_field('subtitle_offer_2') ) : ?>
          <div class="subtitle"><?= get_field('subtitle_offer_2'); ?></div>
          <?php endif; ?>
          <?php if ( get_field('title_offer_2') ) : ?>
          <h2><?= get_field('title_offer_2'); ?></h2>
          <?php endif; ?>

          <?php if ( get_field('description_offer_2') ) : ?>
          <p><?= get_field('description_offer_2'); ?></p>
          <?php endif; ?>

          <a data-fancybox="" data-src="#contact_us_pop_up" href="javascript:;" class="btn-offer">Зв'яжіться з нами</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/parts/contact-us', 'section' ); ?>

</div>


<?php
get_footer();