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
        'title'     => '管理',
        'slug'      => 'taxonomy_menu',
        'url'       => 'index',
        'icon_class'=> 'ion-apps',
        'icon_bg_color'=> '#000000',
        'font_color'=> '#ff0000',
        'group'     => 'taxonomy_menu',
        'target'     => '_self',
        'order'     => 0,
        'children'  => [
            [
                'title'     => '分类列表',
                'slug'      => 'index',
                'url'       => 'index',
                'icon_class'=> 'ion-apps',
                'target'     => '_self',
                'order'     => 0,
                'methods'   => [
                    'create' => '创建',
                    'update' => '编辑',
                    'read'   => '读取',
                    'delete' => '删除',
                ],
            ]
        ]
        
    ],

    'help_menu'=>[
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