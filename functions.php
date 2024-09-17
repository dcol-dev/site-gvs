<?php
// Registra os menus do tema
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Menu Header'),
            'menu-empresas' => __('Menu Empresas')
        )
    );
}
add_action('init', 'register_my_menus');


