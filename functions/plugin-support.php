<?php
/*-----------------------------------------------------------------------------------*/
/* Code to support or modify optional plugins
/*-----------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------------*/
/* Plugin wpSEO: Metaboxen nur für Pages und Posts
/*-----------------------------------------------------------------------------------*/
add_filter( 'wpseo_add_meta_boxes', 'prefix_wpseo_add_meta_boxes' );
 
function prefix_wpseo_add_meta_boxes() {
    global $post;
    $post_types_without_seo = array( 'event', 'person', 'ad', 'glossary', 'synonym' );
    return !in_array( get_post_type($post), $post_types_without_seo);
} 

/*-----------------------------------------------------------------------------------*/
/*Plugin Statify: für Redakteuere erlauben
/*-----------------------------------------------------------------------------------*/
function statify_init() {
    $role = get_role('editor');
    $role->add_cap('edit_dashboard');
    // statify zulassen für Redakteure
  //  Das ist Konfiguration des Dashboards, nicht Statify...
}
add_action('admin_init', 'statify_init'); 

/*-----------------------------------------------------------------------------------*/
/* Plugin TinyMCE: Button für Seitenumbruch ergänzen
/*-----------------------------------------------------------------------------------*/
add_filter( 'mce_buttons', 'kb_add_next_page_button', 1, 2 );
function kb_add_next_page_button( $buttons, $id ) {
  if ( 'content' === $id ) {
    array_splice( $buttons, 13, 0, 'wp_page' );
  }
  return $buttons;
}

