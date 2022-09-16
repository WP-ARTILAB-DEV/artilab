<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miffka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
		the_content();


		?>
  </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->