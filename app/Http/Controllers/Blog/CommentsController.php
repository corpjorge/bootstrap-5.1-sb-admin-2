<?php
/*!

 =========================================================
 * Material Blog PRO Laravel - v1.0.0
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-dashboard-pro-laravel
 * Copyright 2019 Creative Tim (http://www.creative-tim.com) & UPDIVISION (http://www.updivision.com)

 * Designed by www.invisionapp.com Coded by www.creative-tim.com & www.updivision.com

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */
namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentsRequest;
use App\Comment;
use App\Article;

class CommentsController extends Controller
{
    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Comment $model -> the comment
     * @param \App\Article $article -> the article which has the '$model' comment
     * @return \Illuminate\Http\Response
     */
    public function store(CommentsRequest $request, Comment $model, Article $article)
    {
        $model = $model->create($request->merge([
            'author_id' => auth()->user()->id,
            'article_id' => $article->id,
        ])->all());

        return redirect()->to(url()->previous() . '#comments');
    }
}
