<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The-BNB-Coach
 */

get_header();
?>
<div class="container">
	<!-- the loop -->
	<?php  while ( have_posts() ) : the_post(); ?>
		<h1 id="post-title"><?php the_title(); ?></h1>
		<div class="featured-image">
			<?php if ( has_post_thumbnail() ) {
   					 the_post_thumbnail();
						} ?>
		</div>
		<div id="post-content">
			<?php the_content();?>
		</div>
	<?php endwhile; ?>

</div>

<?php get_footer(); ?>
