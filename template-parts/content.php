<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package thene_personnalise
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-6'); ?>>
    <header class="entry-header">
        <?php
        if (is_single()) :
            the_title('<h1 class="entry-title">', '</h1>');

        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
        } ?>
        <?php
        if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php thene_personnalise_posted_on(); ?>
            </div><!-- .entry-meta -->
            <?php
        endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        if (is_single()) :
            the_content(sprintf(
            // translators: %s: Name of current post.
                wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'thene_personnalise'), array('span' => array('class' => array()))),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ));
        else :
            the_excerpt();
        endif;

        ?>
        <a href="<?php the_permalink(); ?>" class="more">Lire la suite</a>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'thene_personnalise'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php thene_personnalise_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
