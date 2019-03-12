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

    public static function getWidget($widget_id) {
        if (function_exists('dynamic_sidebar')) {
            ob_start();
            dynamic_sidebar($widget_id);
            $widget = ob_get_contents();
            ob_end_clean();
            return $widget;
        }
    }

    public static function getWidgetObj($widget_id) {
        $html = self::getWidget($widget_id);
        $widgets = array();
        $widgets['items'] = array();
        if ($html) {
            $dom = new DOMDocument;
            $dom->loadHTML('<?xml encoding="utf-8" ?>'.$html);
            foreach ($dom->getElementsByTagName('h1') as $node) {
                $widgets['items'][] = array('title'=>$node->nodeValue);
            }
            foreach ($dom->getElementsByTagName('p') as $key => $node) {
                if (!isset($widgets['items'][$key])) {
                    $widgets['items'][] = array('content'=>$node->nodeValue);
                } else {
                    $widgets['items'][$key]['content'] = $node->nodeValue;
                }
            }
        }
        return $widgets;
    }

    public static function getWidgetImgPath($widget_id) {
        $html = self::getWidget($widget_id);
        $widgets = array();
        $widgets['items'] = array();
        if ($html) {
            $dom = new DOMDocument;
            $dom->loadHTML('<?xml encoding="utf-8" ?>'.$html);
            $tags = $dom->getElementsByTagName('img');
            
            foreach ($tags as $tag) {     
                $widgets = $tag->getAttribute('src');
            }
        }
        return $widgets;
    }

    public static function getFirstWidgetObj($widget_id) {
        $widgets = self::getWidgetObj($widget_id);
        return array_shift($widgets['items']);
    }
   
}