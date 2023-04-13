@extends('view_path::layouts.default')



@section('content')
<div class="container container-fluid">
    <div class="page-heading">
        <h1 class="page-title">
            <i class="ion-grid"></i>&nbsp;分类类型
        </h1>
        <a href="{{ admin_ext_url('fasttaxonomy/taxonomy/add') }}" class="pop-modal btn btn-primary btn-sm">增加类型</a>
        
    </div>
    <p class="help-block">
        类型数据是是读取该类型下的第一个分类(标签)数据<br>
        删除类型，将删除类型下的所有分类(标签)数据<br>
    </p>
    <div class="row row-row">
        
        
        @if($data_list->count()>0)
        
        <div class="col-12 suda_page_body">
            <div class="card">
                
                <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                          <thead class="bg-light">
                            <tr>
                              
                              <th width="15%">
                                  类型名称
                              </th>
                              <th width="15%">
                                  类型标识
                              </th>
                              
                              <th width="15%">
                                  管理
                              </th>
                              
                              <th width="15%">
                                  {{ trans('suda_lang::press.updated_at') }}
                              </th>
                              
                              <th>
                                  {{ trans('suda_lang::press.operate') }}
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($data_list as $item)
                            <tr>
                              
                              <td>
                                  {{ $item->taxonomy_title }}
                              </td>
                              <td>
                                {{ $item->taxonomy }}
                                <span class="badge bg-secondary">{{ $item->count }}</span>
                              </td>
                              <td>
                                <a href="{{ admin_ext_url('fasttaxonomy/taxonomy/'.$item->taxonomy.'/terms') }}" class="btn btn-light btn-xs" title="管理分类" data-toggle="tooltip" data-placement="top">管理分类</a>
                              </td>
                              <td>{{ $item->updated_at }}</td>
                              
                              <td>
                                  <a href="{{ admin_ext_url('fasttaxonomy/taxonomy/edit/'.$item->id) }}" class="pop-modal btn btn-light btn-xs" title="{{ trans('suda_lang::press.edit') }}" data-toggle="tooltip" data-placement="top">编辑</a>
                                  <button href="{{ admin_ext_url('fasttaxonomy/taxonomy/delete/'.$item->id) }}" class="pop-modal-delete btn btn-light btn-xs" data_id="{{ $item->id }}" title="{{ trans('suda_lang::press.delete') }}" data-toggle="tooltip" data-placement="top"><i class="ion-trash"></i></button>
                              </td>

                            </tr>
                            @endforeach
                            
                          </tbody>
                      </table>
                      
                      {{ $data_list->links() }}
                    </div>
                </div>
                
            </div>
        </div>
        
        @else
        
        @include('view_suda::admin.component.empty',['empty'=>'Oops... 还没有内容'])
        
        @endif
    </div>
</div>
@endsection
