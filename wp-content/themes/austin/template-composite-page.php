<?php
/**
 * Template Name: Composite Page
 *
 * Custom Page template for creating single page site utilizing page sections custom post type instances
 *
 * @package Austin
 * @subpackage Template
 */

get_header(); // displays slider content if so chosen by user
?>

<div id="content" class="<?php echo mo_get_content_class(); ?>">

    <div class="hfeed">

        <?php

        $page_sections_ids = mo_get_chosen_page_section_ids(get_the_ID());
        if (!empty($page_sections_ids))
            $posts_per_page = -1;
        else
            $posts_per_page = 20; // limit the number of page sections shown if none selected


        $loop = new WP_Query(array('post_type' => 'page_section', 'posts_per_page' => $posts_per_page, 'post__in' => $page_sections_ids, 'orderby' => 'post__in', 'post_status' => 'publish'));

        if ($loop->have_posts()) :

            while ($loop->have_posts()) : $loop->the_post();

                global $post;

                ?>

                <article id="<?php echo $post->post_name ?>" class="<?php echo(join(' ', get_post_class()) . ' first'); ?>">

                    <?php the_content(); ?>

                    <?php
                    if (current_user_can('edit_post', $post->ID) && $link = esc_url(get_edit_post_link($post->ID)))
                        echo '<a title="' . get_the_title($post->ID) . '" class="button edit-button" href="' . $link . '" target="_blank">' . __('Edit', 'mo_theme') . '</a>';
                    ?>

                </article>
                <!-- .hentry -->

                <?php

            endwhile;

        else :

            get_template_part('loop-error'); // Loads the loop-error.php template.

        endif;

        ?>

    </div>
    <!-- .hfeed -->

</div><!-- #content -->

<?php wp_reset_postdata(); /* Right placement to help not lose context information */ ?>

<?php get_footer(); ?>
