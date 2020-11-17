<?php get_header();?>
    <main>
        <div class="content container">
            <div class="post">
            <?php
            if (have_posts()): while (have_posts()): the_post();?>
                <div><h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></div>
                <div><a href="<?php the_permalink();?>"><?php the_post_thumbnail('post_thumb'); ?></a></div>


                <?php the_category($separator = '/', '');?>
            <div class="date">
                <h6>Posted on <?php the_time('F jS, Y');?></h6>
            </div>
            <div class="post-content">
                <?php the_excerpt(); ?>
            </div>

<!--                <p>--><?php //the_content(__('(more...)'));?><!--</p>-->
                <hr><?php endwhile;else: ?>

                <p><?php _e('Sorry, no posts')?></p><?php endif;?>
            </div>
        </div>
        <?php get_sidebar();?>

    </main>
    <div class="delimetr"></div>
<?php get_footer();?>