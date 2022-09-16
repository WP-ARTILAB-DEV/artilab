<?php
/**
 * Template name: Контакты
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
<!--main-->
<div id="main" class="clearfix">
	<div class="m_head">
		<div class="in">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<ul id="breadcrumbs" class="breadcrumbs">','</ul>' );
			}
			?>
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	
	
</div>




<?php
get_footer();
