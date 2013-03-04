<?php

/*
* Walker personaliser pour les menus. il permet de créer un menu sans class et sans id
* excepter pour les sous-ul qui auront la class sub-menu
*/

class  Nav_Princ_Walker extends Walker_Nav_Menu {

var $tree_type = array( 'post_type', 'taxonomy', 'custom' );


  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );


  function start_el(&$output, $item, $depth, $args)
      {
      global $wp_query;
      $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
      
      $class_names = $value = '';
      
      // If the item has children, add the dropdown class for bootstrap
      if ( $args->has_children & $depth==0) {
        $class_names = "dropdown";
      }
      elseif ($args->has_children & $depth!=0){
        $class_names = "dropdown-submenu";
      }
      
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      
     // $class_names .= join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
      $class_names = ' class="'. esc_attr( $class_names ) . '"';
           
            $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            // if the item has children add these two attributes to the anchor tag
            if ( $args->has_children & $depth==0) {
        $attributes .= ' class="dropdown-toggle" data-target="#" ';
      }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= $args->link_after;
            // if the item has children add the caret just before closing the anchor tag
            if ( $args->has_children  & $depth==0) {
              $item_output .= '<b class="caret"></b></a>';
            }
            else{
              $item_output .= '</a>';
            }
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
            
        function start_lvl(&$output, $depth) {
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<ul class=\"dropdown-menu \">\n";
        }
            
        function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
            {
                $id_field = $this->db_fields['id'];
                if ( is_object( $args[0] ) ) {
                    $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
                }
                return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
            }
 
 }
 ?>