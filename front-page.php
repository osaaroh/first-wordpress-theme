<?php get_header(); ?>
<main>
    <section class="hero">
        <h1>Welcome to <?php bloginfo('name'); ?></h1>
        <p>Your custom WordPress theme is now dynamic!</p>
    </section>
    <section class="features">
        <h2>Why Choose Us?</h2>
        <ul>
            <li> ✅ Fast and Lightweight</li>
            <li> ✅ Easy to understand</li>
            <li> ✅ SEO-friendly</li>
        </ul>
    </section>
</main>
<?php get_sidebar(); ?> <!--Include the sidebar -->
<?php get_footer(); ?>