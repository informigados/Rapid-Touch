<?php get_header(); ?>

<div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>

        <p class="post-meta">
            Posted by <?php the_author_posts_link(); ?> in <?php echo get_the_date(); ?> at <?php echo get_the_time(); ?>
        </p>

        <div>
            <?php the_content(); ?>
        </div>
        
        <div class="post-categories">
            Categories: <?php the_category(', '); ?>
        </div>

        <div class="post-tags">
            Tags: <?php the_tags('', ', '); ?>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
