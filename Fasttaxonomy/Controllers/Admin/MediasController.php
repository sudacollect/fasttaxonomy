<?php
/**
 * MediasController.php
 * 媒体资源方法
 * date 2018-12-12 15:44:59
 * author daocatt <hello@suda.gtd.xyz>
 * @copyright GTD. All Rights Reserved.
 */
 

namespace App\Extensions\Fasttaxonomy\Controllers\Admin;

//把这里改为自己需要使用的控制器，才能获取到$this->user;
use App\Extensions\Fasttaxonomy\Controllers\AdminController;


use Gtd\Suda\Traits\MediaBoxTrait;

class MediasController extends AdminController
{
    use MediaBoxTrait;
    
    public function mediaSetting(){

        $this->guard = 'operate';

    }

}
