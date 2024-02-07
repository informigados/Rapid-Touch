<?php get_header(); ?>

<div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="home-post"> 
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <p class="post-meta">
                Posted by <?php the_author_posts_link(); ?> in <?php echo get_the_date(); ?> at <?php echo get_the_time(); ?>
            </p>

            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="button">
                Read More
                <span class="screen-reader-text"> about <?php the_title(); ?></span>
            </a>
        </div> <!-- Feche a div com a classe home-post aqui -->
    <?php endwhile; endif; ?>

    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>
</div>

<?php get_footer(); ?>
