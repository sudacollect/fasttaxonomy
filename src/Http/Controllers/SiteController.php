<?php

namespace Gtd\Extension\Fasttaxonomy\Http\Controllers;

use Illuminate\Http\Request;

use Gtd\Suda\Http\Controllers\SiteController as SiteCtl;


class SiteController extends SiteCtl
{
    public $extension_view = 'fasttaxonomy';    //定义view目录
    
    public function index()
    {
        $this->title('前台首页');

        return $this->display('index');
    }
    
}
