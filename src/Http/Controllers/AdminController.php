<?php

namespace Gtd\Extension\Fasttaxonomy\Http\Controllers;

use Gtd\Suda\Http\Controllers\Admin\ExtensionController;

class AdminController extends ExtensionController{
    
    public $single_extension_menu = true;


    public function __construct(){
        parent::__construct();

        // $this->setData('current_navi','启动');
    }
    
}

