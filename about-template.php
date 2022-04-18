<?php
/**
 * Template Name: About Layout
 * Template Post Type: page
 */
    get_header();
?>
    <main>
    <!-- Custom advanced fields -->
    <section class="masthead" style="background-image: url('<?php the_field('masthead_background_image'); ?>')">
        <h1 class="masthead-title"><?php the_field('masthead_title'); ?></h1>
    </section>
    <section>
        <h2 class="about-row-title"><?php the_field('row_one_title'); ?></h2>
        <p class="about-row-text"><?php the_field('row_one_text'); ?></p>
    </section>

    </main>

<?php
    get_footer();
?>