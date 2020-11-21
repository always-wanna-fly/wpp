<?php get_header(); ?>
<?php
//if (have_posts()): while (have_posts()): the_post();?>
<?php //get_template_part('post-templates/post', get_post_format()); ?>
<?php //endwhile;?>
<?php //endif;?>
<main>
    <div class="container">
        <div class="title">
            <h1><?php the_title()?></h1>
        </div>
        <div class="image">
        <?php the_post_thumbnail(); ?>
        </div>
        <div class="description">
        <p><?php the_content();?></p>
        </div>
    </div>
</main>
<?php get_footer();?>
