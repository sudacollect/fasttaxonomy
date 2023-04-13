@extends('view_path::layouts.default')



@section('content')

<div class="container">
    <h1 class="page-title"><i class="zly-stack"></i>&nbsp;&nbsp;使用快站</h1>
    <div class="row row-row">
        

        
        
        
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-header">
                    
                    站点设置
                    
                </div>
                <div class="card-body">
                
                    <p>
                        设置站点标题、SEO信息、默认访问页面等.
                    </p>
                    
                    <a href="{{ admin_url('setting/site') }}" class="btn btn-secondary">系统设置</a>
                
                </div>
                
            </div>
        </div>
        
        
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-header">
                    
                    菜单设置
                    
                </div>
                <div class="card-body">
                
                    <p>
                        内置菜单管理
                    </p>
                    
                    <a href="{{ admin_url('menu') }}" class="btn btn-secondary">菜单设置</a>
                
                </div>
                
            </div>
        </div>
        
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    
                    新闻公告和页面设置
                    
                </div>
                <div class="card-body">
                
                    <p>
                    内置文章和页面管理可以支持快速创建新闻公告、自定义介绍页面.
                    </p>
                    
                    <a href="{{ admin_url('page') }}" class="btn btn-secondary">页面管理</a>
                    <a href="{{ admin_url('article') }}" class="btn btn-secondary">文章管理</a>
                
                </div>
                
            </div>
        </div>
        
        
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    
                    风格设置
                    
                </div>
                <div class="card-body">
                
                    <p>
                    内置主题风格管理.
                    </p>
                    
                    <a href="{{ admin_url('theme') }}" class="btn btn-secondary">管理站点主题</a>
                    <a href="{{ admin_url('style/dashboard') }}" class="btn btn-secondary">管理控制台风格</a>
                
                </div>
                
            </div>
        </div>
        
        
    </div>
</div>
@endsection