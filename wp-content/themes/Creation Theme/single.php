<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_header(); ?>
<div class="main single container">
	<div class="row">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post col-6">
					<h1 class="post-title"><?php the_title(); ?></h1>
					<p class="post-info">
						Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
					</p>
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<div class="post-comments">
						<?php comments_template(); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="col-6">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
