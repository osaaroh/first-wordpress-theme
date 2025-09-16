<?php get_header(); ?>
    <main>

    <h1><?php the_title(); ?></h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()): the_post(); ?>
            <article>
                <?php the_content(); ?>

                <?php
                if (is_page('about')) {
                    echo '<p>This is our About page </p>';
                } elseif(is_page('services')){
                    echo '<p>Check out our services below </p>';
                }
                ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found!</p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?> <!--Include the sidebar -->
<?php get_footer(); ?>