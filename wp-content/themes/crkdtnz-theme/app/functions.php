<?php

add_theme_support('post-thumbnails');
remove_action('wp_head', 'wp_generator');

// --------------------Виджет Twitter---------------------------
function Twitter() {
	register_sidebar( array(
		'name'          => 'Twitter',
		'id'            => 'Twitter',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	) );
}
add_action( 'widgets_init', 'Twitter' );

// --------------------Регистрация меню--------------------------------------

function top_menu() {
    register_nav_menus(array(
        'top-menu' => 'Меню сайта'
    ));
}
add_action('init', 'top_menu');

// --------------------Убираем тег #more из ссылки на полную запись-----------

function remove_more_tags($link) {
    $offset = strpos($link, '#more-');
    if ($offset) {
        $end = strpos($link, '"',$offset);
    }
    if ($end) {
        $link = substr_replace($link, '', $offset, $end-$offset);
    }
    return $link;
}

add_filter('the_content_more_link', 'remove_more_tags');