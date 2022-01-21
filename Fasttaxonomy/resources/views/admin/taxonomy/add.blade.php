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
                  标识仅支持英文字母和下划线
              </span>
            </div>
            
    
            <div class="mb-3{{ $errors->has('taxonomy_title') ? ' has-error' : '' }}">
              <label for="taxonomy_title">
                  标识名称
              </label>
              <input type="text" name="taxonomy_title" class="form-control" id="taxonomy_title" placeholder="标识名称">
            </div>
    
            <div class="mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">
                    初始分类名称
                </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="初始分类名称">
            </div>
            
            <div class="mb-3{{ $errors->has('slug') ? ' has-error' : '' }}">
                <label for="slug">
                    初始分类slug
                </label>
                <input type="text" name="slug" class="form-control" id="slug" placeholder="初始分类slug">
                <span class="help-block">
                    分类slug仅支持英文字母和下划线
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
