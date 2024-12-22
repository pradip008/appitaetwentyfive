<?php

//Register Primary and footer  Menus 
if ( ! function_exists( 'appitae_register_nav_menu' ) ) {

	function appitae_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu1'  => __( 'Footer Left Menu', 'text_domain' ),
            'footer_menu2'  => __( 'Footer Right Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'appitae_register_nav_menu', 0 );

}

/**
 * Custom walker class.
 */
class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {

    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $classes = array(
            $depth === 0 ? 'navigationc-2' : 'dropdown-menu', // Add 'navigation' to top-level <ul>.
        );
        $class_names = implode(' ', $classes);

        $output .= "\n$indent<ul class=\"$class_names\">\n";
    }

    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : '');

        // Classes for <li>.
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'current active' : '';
        $classes[] = 'menu-item';
        if (!empty($args->has_children)) {
            $classes[] = 'dropdown';
        }
        $class_names = esc_attr(implode(' ', array_filter($classes)));

        // Start <li>.
        $output .= "$indent<li class=\"$class_names\">";

        // Link attributes.
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="menu-link ' . ($depth === 0 ? 'main-menu-link' : 'sub-menu-link') . '"';

        // Add link.
        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    /**
     * Check if a menu item has children and add a class to the parent <li>.
     *
     * @param object $element           Menu item data object.
     * @param array  $children_elements Menu item's children elements.
     * @param int    $max_depth         Maximum depth of menu items.
     * @param int    $depth             Depth of the current item.
     * @param array  $args              An array of arguments.
     * @param string $output            Passed by reference. Used to append additional content.
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
        if (!empty($children_elements[$element->ID])) {
            $element->classes[] = 'menu-item-has-children dropdown';
        }
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}
