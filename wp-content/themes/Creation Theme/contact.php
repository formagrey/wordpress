<?php
/*
Template Name: contact
 */
?>
<?php get_header(); ?>
    <div class="container-fluid">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post text-center">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="post-comments">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
