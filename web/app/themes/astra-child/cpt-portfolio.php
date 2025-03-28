<?php

function register_portfolio_cpt() {
    $labels = array(
        'name'               => 'Portfolio',
        'singular_name'      => 'Réalisation',
        'menu_name'          => 'Portfolio',
        'name_admin_bar'     => 'Réalisation',
        'add_new'            => 'Ajouter une réalisation',
        'add_new_item'       => 'Ajouter une nouvelle réalisation',
        'new_item'           => 'Nouvelle réalisation',
        'edit_item'          => 'Modifier la réalisation',
        'view_item'          => 'Voir la réalisation',
        'all_items'          => 'Toutes les réalisations',
        'search_items'       => 'Rechercher dans le portfolio',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'portfolio'),
        'supports'           => array('title', 'editor', 'thumbnail'), 
        'taxonomies'         => array('portfolio_category'), 
        'menu_icon'          => 'dashicons-portfolio', 
        'show_in_rest'       => true, 
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'register_portfolio_cpt');


function register_portfolio_categories() {
    $labels = array(
        'name'              => 'Catégories Portfolio',
        'singular_name'     => 'Catégorie Portfolio',
        'search_items'      => 'Rechercher des catégories',
        'all_items'         => 'Toutes les catégories',
        'edit_item'         => 'Modifier la catégorie',
        'update_item'       => 'Mettre à jour la catégorie',
        'add_new_item'      => 'Ajouter une nouvelle catégorie',
        'new_item_name'     => 'Nom de la nouvelle catégorie',
    );

    $args = array(
        'hierarchical'      => true, 
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'register_portfolio_categories');