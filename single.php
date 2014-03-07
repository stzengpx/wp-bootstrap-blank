<?php get_header(); ?>
    <div class="col-md-9">
        <div class="panel panel-default panel-body">
            <?php while (have_posts()) : the_post(); ?>  
                <h3><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
                <p><?php the_content(''); ?></p>

                <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
    <div class="col-md-3">
        <?php
        query_posts('posts_per_page=8');
        while (have_posts()) : the_post();
            ?>
        <a href="<?php the_permalink(); ?>" class="list-group-item">
            <h4 class="list-group-item-heading"><?php the_title(); ?></h4>
            <p class="list-group-item-text">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
        </a>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
</div>
<?php get_footer(); ?>

