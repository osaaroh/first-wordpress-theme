<aside class="sidebar">
    <?php if (is_active_sidebar('main-sidebar')) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else : ?>
        <p>Add some widgets to the sidebar!</p>
    <?php endif; ?>
</aside>