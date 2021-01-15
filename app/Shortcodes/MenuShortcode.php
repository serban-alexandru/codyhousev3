<?php

namespace App\Shortcodes;
use Modules\Menus\Entities\Menus;

class MenuShortcode {

  public function register($shortcode, $content, $compiler, $name, $viewData)
  {
    $menus = array();

    if ($shortcode->id) {
      $menu_info = Menus::where('id', $shortcode->id)->with('items')->first();
    } else if ($shortcode->name) {
      $menu_info = Menus::where('name', $shortcode->name)->with('items')->first();
    } else {
      return '';
    }

    if (!$menu_info) {
      return '';
    }

    $menus = $menu_info->items->toArray();

    $menu_template = '<ul class="mega-nav__items js">';

    foreach ($menus as $menu) {
      if ($menu['child']) {
        $menu_template .= '<li class="mega-nav__item dropdown__wrapper">';
        $menu_template .= '  <a href="' . $menu['link'] . '" class="mega-nav__control dropdown__trigger">' . $menu['label'] . '</a>';

      } else {
        $menu_template .= '<li class="mega-nav__item">';
        $menu_template .= '  <a href="' . $menu['link'] . '" class="mega-nav__control">' . $menu['label'] . '</a>';
      }

      if ($menu['child']) {
        $menu_template .= '<ul class="dropdown dropdown__menu">';

        foreach ($menu['child'] as $child) {
          $menu_template .= '<li class="dropdown__item">';
          $menu_template .= '  <a href="' . $child['link'] . '">' . $child['label'] . '</a>';
          $menu_template .= '</li>';    
        }
        
        $menu_template .= '</ul>';
      }

      $menu_template .= '</li>';
    }

    $menu_template .= '</ul>';
        
    return $menu_template;
  }
}
