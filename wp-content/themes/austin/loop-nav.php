<?php
/**
 * Loop Nav Template
 *
 * This template is used to show your your next/previous post links on singular pages and
 * the next/previous posts links on the home/posts page and archive pages.
 *
 * @package Austin
 * @subpackage Template
 */
?>
<?php if (is_attachment()) : ?>

    <div class="loop-nav">
        <?php previous_post_link('<div class="previous">' . __('Return to ', 'mo_theme') . '%link</div>'); ?>
    </div><!-- .loop-nav -->


<?php elseif (is_singular('portfolio')) : ?>

    <div class="loop-nav">
        <?php next_post_link('<div class="previous">' . '%link' . '</div>', '<span>' . __('Previous Project', 'mo_theme') . '</span>', true, array(), 'portfolio_category'); ?>
        <?php
        $page_id = mo_get_theme_option('mo_default_portfolio_page');
        if (!empty($page_id))
            $page_link = get_permalink($page_id);
        else
            $page_link = get_post_type_archive_link('portfolio');
        echo '<div class="portfolio-index"><a title=' . __("All Portfolio Items", 'mo_theme') . ' href="http://saviva.net/our-works"><i class="icon-thumbnails"></i></a></div>'; ?>
        <?php previous_post_link('<div class="next">' . '%link' . '</div>', '<span>' . __('Next Project', 'mo_theme') . '</span>', true, array(), 'portfolio_category'); ?>
    </div><!-- .loop-nav -->

<?php
elseif (is_singular('post')) : ?>

    <div class="loop-nav">
        <?php previous_post_link('<div class="previous">&larr; ' . __('%link', 'mo_theme') . '</div>', '%title'); ?>
        <?php next_post_link('<div class="next">&rarr; ' . __('%link', 'mo_theme') . '</div>', '%title'); ?>
    </div><!-- .loop-nav -->

<?php
elseif (mo_is_portfolio_context()) :
    mo_loop_pagination(array(
        'prev_text' => '<i class="icon-arrow-left7"></i>' . '',
        'next_text' => '' . '<i class="icon-arrow-right7"></i>'
    )); ?>

<?php
elseif (!is_singular()) :
    mo_loop_pagination(array(
        'prev_text' => '<i class="icon-arrow-left7"></i>' . '',
        'next_text' => '' . '<i class="icon-arrow-right7"></i>'
    )); ?>

<?php
elseif (!is_singular() && $nav = get_posts_nav_link(array(
        'sep' => '',
        'prelabel' => '<div class="previous">' . __('Previous Page', 'mo_theme') . '</div>',
        'nxtlabel' => '<div class="next">' . __('Next Page', 'mo_theme') . '</div>'
    ))
) : ?>

    <div class="loop-nav">
        <?php echo $nav; ?>
    </div><!-- .loop-nav -->

<?php endif; ?>