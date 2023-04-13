@extends('view_path::component.modal')

@section('content')

<form class="handle-ajaxform" role="form" method="POST" action="{{ admin_ext_url('fasttaxonomy/taxonomy/save') }}">
    @csrf
    
    <div class="modal-body">
        
        <div class="container-fluid">

            <div class="mb-3{{ $errors->has('taxonomy') ? ' has-error' : '' }}">
        
              <label for="inputName" >
                  分类标识
              </label>
      
              <input type="text" name="taxonomy" class="form-control" id="taxonomy" placeholder="标识符">
              <span class="help-block">
                  仅支持英文字母和下划线, 例如：default
              </span>
            </div>
            
    
            <div class="mb-3{{ $errors->has('taxonomy_title') ? ' has-error' : '' }}">
              <label for="taxonomy_title">
                  标识名称
              </label>
              <input type="text" name="taxonomy_title" class="form-control" id="taxonomy_title" placeholder="名称">
                <span class="help-block">
                    例如：商品分类
                </span>
            </div>
    
            <div class="mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">
                    初始分类
                </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="名称">
                <span class="help-block">
                    第一个分类名称，例如：精美配饰
                </span>
            </div>
            
            <div class="mb-3{{ $errors->has('slug') ? ' has-error' : '' }}">
                <label for="slug">
                    初始分类slug
                </label>
                <input type="text" name="slug" class="form-control" id="slug" placeholder="slug">
                <span class="help-block">
                    slug仅支持英文字母和下划线, 例如：good_accessory
                </span>
            </div>
            
        </div>
        
    </div>
    
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">{{ __('suda_lang::press.submit_save') }}</button>
    </div>

</form>

<script>
    
    jQuery(document).ready(function(){
        $('.handle-ajaxform').ajaxform();
        
    });
    
</script>
    
@endsection
