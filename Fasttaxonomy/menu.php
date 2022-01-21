<?php
/*
|--------------------------------------------------------------------------
| 菜单扩展
|--------------------------------------------------------------------------
|
| 目前支持扩展菜单项
| 1. 支持对当前已存在菜单的扩展
| 2. 支持扩展新的菜单项
|
*/

return [
    
    'taxonomy_menu'=>[
        'single'    => false,
        'title'     => '管理',
        'slug'      => 'taxonomy_menu',
        'url'       => 'index',
        'icon_class'=> 'ion-apps',
        'icon_bg_color'=> '#000000',
        'font_color'=> '#ff0000',
        'group'     => 'taxonomy_menu',
        'target'     => '_self',
        'order'     => 0,
    ],

    'help_menu'=>[
        'single'    => false,
        'title'     => '帮助',
        'slug'      => 'help_menu',
        'url'       => 'help',
        'icon_class'=> 'ion-help-buoy',
        'icon_bg_color'=> '#000000',
        'font_color'=> '#ff0000',
        'group'     => 'help_menu',
        'target'     => '_self',
        'order'     => 1,
    ],
    
];