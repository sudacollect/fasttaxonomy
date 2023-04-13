<?php

$extpath = 'Fasttaxonomy';
$controller_prefix = "\\Gtd\\Extension\\Fasttaxonomy\\Http\\Controllers\\Admin\\";


Route::group([
    'as'         => 'fasttaxonomy.',
    'prefix'     => 'fasttaxonomy',
], function ($router) use ($extpath,$controller_prefix) {

    Route::get('index/{param?}', $controller_prefix.'HomeController@index');

    


    Route::get('taxonomy/add', $controller_prefix.'HomeController@showAddForm');
    Route::get('taxonomy/edit/{id}', $controller_prefix.'HomeController@showEditForm');

    Route::post('taxonomy/save', $controller_prefix.'HomeController@save');

    Route::post('taxonomy/delete/{id}', $controller_prefix.'HomeController@delete');


    //管理分类
    Route::get('taxonomy/{taxonomy_name}/terms', $controller_prefix.'TermController@getList');

    Route::get('taxonomy/term/add/{taxonomy_name}/{parent_id?}', $controller_prefix.'TermController@create');
    Route::get('taxonomy/term/update/{id}', $controller_prefix.'TermController@update');
    Route::post('taxonomy/term/save', $controller_prefix.'TermController@save');
    Route::post('taxonomy/term/delete/{id}', $controller_prefix.'TermController@delete');

    Route::post('taxonomy/term/editsort/{id}', $controller_prefix.'TermController@editSort');

    

    //设置页面
    Route::get('help', $controller_prefix.'HomeController@help');

    


});
