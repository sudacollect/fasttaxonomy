@extends('view_path::component.modal')

@section('content')

<form class="handle-ajaxform" role="form" method="POST" action="{{ admin_ext_url('fasttaxonomy/taxonomy/save') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    
    <div class="modal-body">
        
        <div class="container-fluid">

            <div class="mb-3{{ $errors->has('taxonomy') ? ' has-error' : '' }}">
        
              <label for="inputName" >
                  分类标识
              </label>
      
              <input type="text" name="taxonomy" readonly class="form-control-plaintext" id="taxonomy" placeholder="标识符" value="{{ $data->taxonomy }}">
              <span class="help-block">
                  标识仅支持英文字母和下划线
              </span>
            </div>
            
    
            <div class="mb-3{{ $errors->has('taxonomy_title') ? ' has-error' : '' }}">
              <label for="taxonomy_title">
                  类型名称
              </label>
              <input type="text" name="taxonomy_title" class="form-control" id="taxonomy_title" placeholder="类型名称" value="{{ $data->taxonomy_title }}">
            </div>
            
            <input type="hidden" name="name" class="form-control" id="name" placeholder="初始分类名称" value="{{ $data->term->name }}">
            <input type="hidden" name="slug" class="form-control" id="slug" placeholder="初始分类slug" value="{{ $data->term->slug }}">

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
