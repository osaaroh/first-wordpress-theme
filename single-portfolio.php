<?php get_header(); ?>

<main class="portfolio-item">
    <?php if (have_posts()) : while (have_posts()): the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <div class="portfolio-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif;?>

</main>

<? get_footer(); ?>