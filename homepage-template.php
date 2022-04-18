<?php
/**
 * Template Name: Homepage Layout
 * Template Post Type: page
 */
    get_header();
?>
    <main>
        <?php
            while(have_posts()) : the_post();
                the_content();
            endwhile;
                wp_reset_query();
        ?>
    <!-- Custom advanced fields -->
    <section class="masthead img-fluid" style="background-image: url('<?php the_field('masthead_background_image'); ?>')">
        <h1 class="masthead-title"><?php the_field('masthead_title'); ?></h1>
    </section>
    <section class="row-one-section">
        <div class="row">
            <h2 class="row-one-title"><?php the_field('row_one_title'); ?></h2>
            <div class="col">
                <section class="row-one-img" style="background-image: url('<?php the_field('row_one_image'); ?>')"></section>
            </div>
            <div class="col">
                <p class="row_one_text"><?php the_field('row_one_text'); ?></p>
            </div>
        </div>
    </section>
    <!-- Add custom post type to homepage -->
    <div class="container">
        <section class="coffee-blog-list">
            <article class="row">
                <?php
                    $args2 = array('post_type' => 'blogs', 'posts_per_page' => 12);
                    $the_query = new WP_QUERY($args2);
                    if($the_query->have_posts()) : 
                        while($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <?php if(get_the_post_thumbnail()): ?>
                            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="featured image">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <?php 
                            the_excerpt();
                            the_category();
                        ?>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                    <?php
                        endwhile;
                            wp_reset_postdata();
                        else:
                    endif;
                    ?>
            </article>
        </section>
    </div>
    <!-- Featured Product Section -->
    
    <div class="row product-row">
    <h1 class="featured-header">Featured Products</h1>
        <div class="col-sm-3 col-md-4 col-lg-4">
            <div class="card" style="width: 25rem;">
            <img src='wp-content/uploads/2022/04/pexels-caio-69976-300x300.jpg' class="card-img-top" alt="product image">
                <div class="card-body">
                    <h5 class="card-title">Dark Roast Coffee Beans</h5>
                    <p class="card-text">Et tortor at risus viverra adipiscing at in. Condimentum vitae sapien pellentesque habitant. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Id diam vel quam elementum pulvinar etiam non. Volutpat ac tincidunt vitae semper quis lectus nulla at. Turpis in eu mi bibendum neque egestas congue quisque. </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card" style="width: 25rem;">
            <img src='wp-content/uploads/2022/04/pexels-cottonbro-3737642-600x400.jpg' class="card-img-top" alt="product image">
                <div class="card-body">
                    <h5 class="card-title">Light Roast Coffee Beans</h5>
                    <p class="card-text">Et tortor at risus viverra adipiscing at in. Condimentum vitae sapien pellentesque habitant. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Id diam vel quam elementum pulvinar etiam non. Volutpat ac tincidunt vitae semper quis lectus nulla at. Turpis in eu mi bibendum neque egestas congue quisque. </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card" style="width: 25rem;">
            <img src='wp-content/uploads/2022/04/pexels-quang-nguyen-vinh-2131905-150x150.jpg' class="card-img-top" alt="product image">
                <div class="card-body">
                    <h5 class="card-title">Blonde Roasted Coffee Beans</h5>
                    <p class="card-text">Et tortor at risus viverra adipiscing at in. Condimentum vitae sapien pellentesque habitant. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Id diam vel quam elementum pulvinar etiam non. Volutpat ac tincidunt vitae semper quis lectus nulla at. Turpis in eu mi bibendum neque egestas congue quisque. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Shortcode -->
    <section class="row-two-section"><?php the_field('row_two_text') ?></section>
    </main>

<?php
    get_footer();
?>