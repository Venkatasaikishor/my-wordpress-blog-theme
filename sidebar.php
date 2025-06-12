<aside>
    <?php if ( is_active_sidebar('my_sidebar') ) : ?>
        <?php dynamic_sidebar('my_sidebar'); ?>
    <?php else : ?>
        <p>No widgets added. Go to WP Admin → Appearance → Widgets.</p>
    <?php endif; ?>
</aside>
