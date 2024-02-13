<?php
/*
Template Name: Home
Template Post Type: page
*/

get_header(); ?>

<div id="content">
    <!-- About Me Section -->
    <section id="about-me">
        <h2>
            <?php echo wp_kses_post(get_field("about_me")); ?>
        </h2>
        <p>
            <?php echo wp_kses_post(get_field("about_content")); ?>
        </p>
    </section>

    <!-- Goals Section -->
    <section id="goals">
        <h2>
            <?php echo wp_kses_post(get_field("goals")); ?>
        </h2>
        <p>
            <?php echo wp_kses_post(get_field("goals_content")); ?>
        </p>
    </section>

    <!-- Recent Posts Section -->
    <section id="recent-posts">
        <h2>Recent Posts</h2>
        <div class="posts-list">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a></h3>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else:
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>