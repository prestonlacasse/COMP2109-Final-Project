<?php
/**
 * Template Name: Coffee Blog Layout
 * Template Post Type: blogs
 */
get_header();
?>

    <main class="coffee-blog-template row">
        <div class="blog-col col-sm-12 col-md-6 col-lg-6">
            <!-- featured image -->
            <?php
                if(has_post_thumbnail()):
            ?>
            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="featured image">
            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <!-- SHow the rest of the content -->
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </main>

<?php get_footer(); ?>