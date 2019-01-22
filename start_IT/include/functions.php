<?php

add_action( 'after_setup_theme', 'start_it_register_nav_menu' );
function start_it_register_nav_menu() {
    register_nav_menu( 'primary', 'Главное меню' );
}

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

if(function_exists('acf_add_options_page')){

    $parent=acf_add_options_page([
        'page_title'=>'Theme Settings',
        'menu_title'=>'Theme Settings',
        'redirect'  =>false
    ]);
}

// Регистрация таксономии:
add_action( 'init', 'create_portfolio_category', 0 );
function create_portfolio_category() {
$args = array(
'label' => _x( 'Категории портфолио', 'taxonomy general name' ), 
'labels' => array(
'name' => _x( 'Категории портфолио', 'taxonomy general name' ), 
'singular_name' => _x( 'Категория портфолио', 'taxonomy singular name' ), 
'menu_name' => __( 'Portfolio Category' ), 
'all_items' => __( 'Все категории портфолио' ), 
'edit_item' => __( 'Изменить категорию портфолио' ), 
'view_item' => __( 'Просмотреть категорию портфолио' ), 
'update_item' => __( 'Обновить категорию портфолио' ), 
'add_new_item' => __( 'Добавить новую категорию портфолио' ),
'new_item_name' => __( 'Название' ), 
'parent_item' => __( 'Родительская' ), 
'parent_item_colon' => __( 'Родительская:' ), 
'search_items' => __( 'Поиск категорий портфолио' ), 
'popular_items' => null, 
'separate_items_with_commas' => null, 
'add_or_remove_items' => null, 
'choose_from_most_used' => null, 
'not_found' => __( 'Категорий портфолио не найдено.' ), 
),
'public' => true, 
'show_ui' => true, 
'show_in_menu' => true, 
'show_in_nav_menus' => true, 
'show_tagcloud' => true, 
'show_in_quick_edit' => true, 
'meta_box_cb' => null, 
'show_admin_column' => false, 
'description' => '', 
'hierarchical' => true, 
'update_count_callback' => '', 
'query_var' => true, 
'rewrite' => array(
'slug' => 'taxportfolio', 
'with_front' => false, 
'hierarchical' => true, 
'ep_mask' => EP_NONE, 
),

'sort' => null, 
'_builtin' => false, 
);
register_taxonomy( 'taxportfolio', array('portfolio'), $args );
}

add_action( 'init', 'register_post_services' ); 
function register_post_services() {
$labels = array(
'name' => 'Услуги',
'singular_name' => 'Услуги', 
'add_new' => 'Добавить услугу',
'add_new_item' => 'Добавить новую услугу', 
'edit_item' => 'Редактировать услугу',
'new_item' => 'Новая услуга',
'all_items' => 'Все услуги',
'view_item' => 'Просмотр услуги на сайте',
'search_items' => 'Искать услугу',
'not_found' => 'Услуг не найдено.',
'not_found_in_trash' => 'В корзине нет услуг.',
'menu_name' => 'Services' 
);
$args = array(
'labels' => $labels,
'public' => true,
'show_ui' => true, 
'has_archive' => true, 
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail'));
register_post_type('services', $args);
}
add_action( 'init', 'register_post_portfolio' ); 
function register_post_portfolio() {
$labels = array(
'name' => 'Портфолио',
'singular_name' => 'Портфолио', 
'add_new' => 'Добавить в портфолио',
'add_new_item' => 'Добавить новую работу в портфолио', 
'edit_item' => 'Редактировать портфолио',
'new_item' => 'Новая работа',
'all_items' => 'Все работы портфолио',
'view_item' => 'Просмотр портфолио на сайте',
'search_items' => 'Искать работу в портфолио',
'not_found' => 'Работ в портфолио не найдено.',
'not_found_in_trash' => 'В корзине нет работ портфолио.',
'menu_name' => 'Portfolio' 
);
$args = array(
'labels' => $labels,
'public' => true,
'show_ui' => true,
'taxonomies' => array('taxportfolio'), 
'has_archive' => true, 
'menu_position' => 20,
'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail'));
register_post_type('portfolio', $args);
}

add_filter( 'post_updated_messages', 'true_post_type_messages' );
function true_post_type_messages( $messages ) {
global $post, $post_ID;

$messages['services'] = array( 
0 => '', 
1 => sprintf( 'Функция обновлена. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
2 => 'Параметр обновлён.',
3 => 'Параметр удалён.',
4 => 'Услуга обновлена',
5 => isset($_GET['revision']) ? sprintf( 'Услуга восстановлена из редакции: %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
6 => sprintf( 'Услуга опубликована на сайте. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
7 => 'Услуга сохранена.',
8 => sprintf( 'Отправлено на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
9 => sprintf( 'Запланировано на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
10 => sprintf( 'Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
);

$messages['portfolio'] = array( 
0 => '', 
1 => sprintf( 'Портфолио обновлено. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
2 => 'Параметр обновлён.',
3 => 'Параметр удалён.',
4 => 'Портфолио обновлено',
5 => isset($_GET['revision']) ? sprintf( 'Работа портфолио восстановлена из редакции: %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
6 => sprintf( 'Услуга опубликована на сайте. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
7 => 'Работа портфолио сохранена.',
8 => sprintf( 'Отправлено на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
9 => sprintf( 'Запланировано на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
10 => sprintf( 'Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
);
}
