<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package miffka
 */

get_header();
?>


<div class="main-content">


  <section class="portfolio-h-block"
    style="background-image: url('<?php the_post_thumbnail_url( 'full' ) ?>'); visibility: visible; animation-duration: 2s; animation-name: fadeIn;">
    <div class="portfolio-h-block-content">
      <div class="container">
        <div class="portfolio-h-block-content-wrap">
          <h1 class="portfolio-h-block__title"><?php the_title() ?></h1>
          <!-- /.portfolio-h-block__title -->
          <p class="portfolio-h-block__text"><?php the_excerpt(); ?></p>
          <!-- /.portfolio-h-block__text -->
          <a href="<?php the_field('link_site_prt') ?>" target="_blank"
            class="button portfolio-h-block__contact-us p-button-white">Дивитись сайт</a>
        </div>
        <!-- /.portfolio-h-block-content-wrap -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.portfolio-h-block-content -->
  </section>
  <!-- /.portfolio-h-block -->
  <?php the_content(); ?>

  <?php get_template_part( 'template-parts/parts/contact-us', 'section' ); ?>

  <!-- /.contact-us -->


</div>
<?php
get_footer();