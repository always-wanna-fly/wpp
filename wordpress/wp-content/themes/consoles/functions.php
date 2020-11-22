<?php


add_action('after_setup_theme', 'myMenu');
add_action('widgets_init', 'register_my_widgets');
/**
 * Adds a meta box to the post editing screen
 */
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'мій кастомний метабокс', 'prfx-textdomain' ), 'prfx_meta_callback', 'consoles_news' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );

/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>

<?php require_once ('prfx_nonce.php')?>

    <?php
}
/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'meta-text' ] ) ) {
        update_post_meta( $post_id, 'meta-text', sanitize_text_field( $_POST[ 'meta-text' ] ) );
    }
    // Checks for input and saves
    if( isset( $_POST[ 'meta-checkbox' ] ) ) {
        update_post_meta( $post_id, 'meta-checkbox', 'Так' );
    } else {
        update_post_meta( $post_id, 'meta-checkbox', 'Ні' );
    }

// Checks for input and saves
    if( isset( $_POST[ 'meta-checkbox-two' ] ) ) {
        update_post_meta( $post_id, 'meta-checkbox-two', 'Так' );
    } else {
        update_post_meta( $post_id, 'meta-checkbox-two', 'Ні' );
    }

}
add_action( 'save_post', 'prfx_meta_save' );

/*
    * end Metabox
    */

function create_post_type(){
    register_post_type('consoles_news',
        array(
            'labels'=>array(
                'name'=>'Новина',
                'singular_name'=>'Новина',
                'add_new'=>'Додати нову новину',
                'add_new_item'=>'Додати новину',
                'edit_item'=>'Редагувати',
                'view_item'=>'Перегляд',
                'search_items'=>'Знайти новину',
                'not_found'=>'Не знайдено',
                'not_found_in_trash'=>'Не знайдено в корзині',
                'parent_item_colon'=>'',
                'menu_name'=>'Новини та анонси',
            ),
            'has_archive'=>true,
            'public'=>true,
            'description'=>'Новини та анонси',

            'publicly_queryable'=>true,
            'exclude_from_search'=>true,
            'show_ui'=>true,
            'show_in_menu'=>true,
            'show_in_admin_bar'=>true,
            'show_in_nav_menus'=>true,
            'show_in_rest'=>true,
//            'rest_base'=>true,
            'menu_position'=>4,
            'menu_icon'=>null,
            'hierarchical'=>false,
            'supports'=>array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
            'taxonomies'=>array('tags'),

            'rewrite'=>true,
            'query_var'=>true,

            ));
}
add_action('init', 'create_post_type');
// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

    register_taxonomy( 'tags', array('consoles_news'), [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Теги',
            'singular_name'     => 'Тег',
            'search_items'      => 'Знайти тег',
            'all_items'         => 'Всі теги',
            'view_item '        => 'Дивитись тег',
            'parent_item'       => 'Батьківський тег',
            'parent_item_colon' => 'Батьківський тег:',
            'edit_item'         => 'Редагувати тег',
            'update_item'       => 'Змінити тег',
            'add_new_item'      => 'Додати новий тег',
            'new_item_name'     => 'Додати новий тег',
            'menu_name'         => 'Теги',
        ],
        'description'           => 'Теги', // описание таксономии
        'public'                => true,
         'publicly_queryable'    => null, // равен аргументу public
        'hierarchical'          => false,

        'rewrite'               => true,
//        //'query_var'             => $taxonomy, // название параметра запроса
//        'capabilities'          => array(),
//        'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
//        'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
//        'show_in_rest'          => null, // добавить в REST API
//        'rest_base'             => null, // $taxonomy
        // '_builtin'              => false,
        //'update_count_callback' => '_update_post_term_count',
    ] );
}









function register_my_widgets(){
    register_sidebar(array(
        'name'=>'Left Sidebar',
        'id'=>"left_sidebar",
        'description'=>'desc',
    ));
}

function myMenu(){
    register_nav_menu('top', 'header menu');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'consoles_news'));
    add_image_size('post_thumb', 200, 200, true);

}


function load_bootstrap(){
wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.js');
wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
wp_enqueue_style('default-css', get_template_directory_uri().'/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');
