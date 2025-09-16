<?php get_header(); ?>
    <main>
    <h1>Latest Blog Posts</h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()): the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>

    <?php else : ?>
        <p>No posts found!</p>
    <?php endif; ?>

</main>
<?php get_sidebar(); ?> <!--Include the sidebar -->
<?php get_footer(); ?>