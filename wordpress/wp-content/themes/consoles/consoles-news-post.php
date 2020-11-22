<?php
/*
Template Name: Сторінка з новиною
Template Post Type: consoles-news
 */
?>
<?php get_header()?>
<?php
$meta_value = get_post_meta( get_the_ID(), 'meta-text', true );
$meta_checkbox = get_post_meta( get_the_ID(), 'meta-checkbox', true );

?>
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
        <div>
            <p>Альтернативний опис: <?php if( !empty( $meta_value ) ) {
                    echo $meta_value;}?></p>
        </div>
        <div>
            <p>Інформація підтверджена виробником:<?php if( !empty( $meta_checkbox) ) {
                                                    echo $meta_checkbox;}?>
            </p>
        </div>
    </div>
</main>

<?php get_footer()?>
