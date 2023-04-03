<?php

namespace App\Extensions\Fasttaxonomy\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TaxonomyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'taxonomy'=>'required|regex:/^[a-z_]+$/u|min:2|max:255',
            'taxonomy_title'=>'required',
            'name'=>'required',
            // 'slug'=>'required|regex:/^[a-z_]+$/u',
        ];
    }

    public function messages()
    {
        return [
            'taxonomy.required'=>'请输入类型标识',
            'taxonomy.regex'=>'类型标识支持英文字母和下划线',
            // 'taxonomy.unique'=>'类型标识重复',
            'taxonomy_title.required'=>'请输入类型名称',
            // 'slug.required'=>'请输入分类标识',
            // 'slug.regex'=>'分类标识支持英文字母和下划线',
            // 'slug.unique'=>'f嗯累标识重复',
            'name.required'=>'请输入分类名称',
        ];
    }
}
