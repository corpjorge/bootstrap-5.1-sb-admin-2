<?php

namespace App\Http\Requests;

use App\Tag;
use App\Article;
use App\Category;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [
                'required', 'min:3', Rule::unique((new Article)->getTable())->ignore($this->route()->article->id ?? null)
            ],
            'slug' => [
                'required', Rule::unique((new Article)->getTable())->ignore($this->route()->article->id ?? null)
            ],
            'category_id' => [
                'required', 'exists:'.(new Category)->getTable().',id'
            ],
            'content' => [
                'required'
            ],
            'tags' => [
                'required'
            ],
            'tags.*' => [
                'exists:'.(new Tag)->getTable().',id'
            ],
            'photo' => [
                $this->route()->article ? 'nullable' : 'required', 'image'
            ],
            'publish_date' => [
                'required',
                'date_format:d-m-Y'
            ]
         ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'category_id' => 'category',
            'photo' => 'picture'
        ];
    }
}
