<?php

namespace App\Extensions\Fasttaxonomy\Controllers\Admin;

use App;
use Illuminate\Http\Request;
use Redirect;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Log;
use Validator;


use App\Extensions\Fasttaxonomy\Controllers\AdminController;

use Gtd\Suda\Models\Taxonomy;

use Gtd\Suda\Traits\TaxonomyTrait;

class TermController extends AdminController
{
    use TaxonomyTrait;

    
    public $taxonomy_name = '';

    function __construct()
    {
        parent::__construct();
        
        
        $this->setMenu('taxonomy_menu');
    }
    

    public function getList(Request $request,$taxonomy_name='')
    {
        if(!$this->taxonomy_name && empty($taxonomy_name)){
            return redirect('error');
        }
        if(!empty($taxonomy_name)){
            $this->taxonomy_name = $taxonomy_name;
        }
        
        $taxonomyObj = new Taxonomy;
        $categories = $taxonomyObj->lists($this->taxonomy_name);
        
        $this->setData('categories',$categories);
        

        $buttons = $this->actionConfig();
        $buttons['create'] = admin_url('extension/fasttaxonomy/taxonomy/term/add/'.$this->taxonomy_name);

        $this->setData('buttons',$buttons);

        $this->title('分类管理');

        return $this->display($this->getViews('list'));
    }

    //新建分类
    public function create(Request $request,$taxonomy_name,$parent_id=0)
    {
        if(!$taxonomy_name){
            return $this->responseAjax('error','数据不存在');
        }
        

        $this->title((property_exists($this,'taxonomy_title')?$this->taxonomy_title:'分类').'管理');
        $this->setData('modal_title',__('suda_lang::press.add'));
        $this->setData('modal_icon_class','zly-plus-circle');

        $taxonomyObj = new Taxonomy;
        $categories = $taxonomyObj->lists($taxonomy_name);

        $this->setData('categories',$categories);
        $this->setData('taxonomy_name',$taxonomy_name);
        $this->setData('parent_id',$parent_id);
        
        $this->getActions();
        return $this->display($this->getViews('create'));
    }

    public function viewConfig(): array
    {

        return [

            'list'  => 'view_suda::taxonomy.category.list',
            'create'=> 'view_suda::taxonomy.category.add',
            'update'=> 'view_suda::taxonomy.category.edit',
        ];

    }

    public function actionConfig(): array
    {

        $buttons = [];
    
        $buttons['create']  = admin_url('extension/fasttaxonomy/taxonomy/term/add');
        $buttons['update']  = admin_url('extension/fasttaxonomy/taxonomy/term/update');
        $buttons['save']    = admin_url('extension/fasttaxonomy/taxonomy/term/save');
        $buttons['delete']  = admin_url('extension/fasttaxonomy/taxonomy/term/delete');
        $buttons['sort']    = admin_url('extension/fasttaxonomy/taxonomy/term/editsort');

        $buttons['modal_url']  = admin_url('medias/modal');
        $buttons['upload_url'] = admin_url('medias/upload/image');
    
        return $buttons;
    }
    
    
}
