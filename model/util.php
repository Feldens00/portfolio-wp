<?php
class Util {
    public static function makeMenuItemsHierarchy($menu_items = array()) {
        $return_menus = array();
        if ($menu_items) {
            foreach ($menu_items as $item) {
                if ($item->menu_item_parent == 0) {
                    $return_menus[$item->ID] = $item;
                    $return_menus[$item->ID]->subitems = array();
                }
            }
            foreach ($menu_items as $item) {
                if ($item->menu_item_parent != 0) {
                    $return_menus[$item->menu_item_parent]->subitems[] = $item;
                }
            }
        }
        return $return_menus;
    }
    public static function getMenuItems($menu_name) {
        $menu_items = array();
        if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_items = self::makeMenuItemsHierarchy($menu_items);
        }
        return $menu_items;
    }
   
}