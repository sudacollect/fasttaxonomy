@extends('view_path::layouts.default')



@section('content')

<div class="container">
    <div class="row row-row">
        <div class="page-heading">
            
            <h1 class="page-title">分类说明</h1>
            
        </div>
        
        @testme()
        
        <div class="col-sm-12">
            <div class="card">
                
                <div class="card-body">
                    <h4>分类类型</h4>

                    <p>
                        分类类型主要用于区分不同分类，例如文章分类、文章标签、商品分类等。<br>
                        
                    </p>

                    <h4>分类管理</h4>

                    <p>
                        分类支持多层级、配色、图片、排序等，可以根据实际需求使用。<br>
                        
                    </p>

                    <h4>定制</h4>

                    <p>
                        可参考开发文档，实现更多自定义定制开发。<br>
                        <a href="https://docs.quyouinc.com/v2.0/basic/taxonomy/">文档链接</a>
                    </p>

                </div>
                
            </div>
        </div>
        
        
    </div>
</div>
@endsection