<?php
/*
Template Name: Post
Template Post Type: post
*/

get_header(); ?>
<div id="content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;
        endwhile;
    endif;
    ?>
</div>
<?php get_footer(); ?>