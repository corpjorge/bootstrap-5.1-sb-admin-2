<?php
/*

 =========================================================
 * Material Blog PRO Laravel - v1.0.0
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-dashboard-pro-laravel
 * Copyright 2019 Creative Tim (http://www.creative-tim.com) & UPDIVISION (http://www.updivision.com)

 * Designed by www.invisionapp.com Coded by www.creative-tim.com & www.updivision.com

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */
namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use App\Category;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Article::class);
    }

    /**
     * Display a listing of the Articles
     *
     * @param \App\Article  $model
     * @return \Illuminate\View\View
     */
    public function index(Article $model)
    {
        if (auth()->user()->isAdmin() || auth()->user()->isMember()) {
            $articles = $model->with(['tags', 'category'])->get();
        } else {
            $articles = $model->article(auth()->user()->id)->with(['tags', 'category'])->get();
        }

        return view('dashboard.articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new Article
     *
     * @param  \App\Tag $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function create(Tag $tagModel, Category $categoryModel)
    {
        return view('dashboard.articles.create', [
            'tags' => $tagModel->get(['id', 'name']),
            'categories' => $categoryModel->get(['id', 'name'])
        ]);
    }

    /**
     * Store a newly created Article in storage
     *
     * @param  \App\Http\Requests\ArticleRequest  $request
     * @param  \App\Article  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ArticleRequest $request, Article $model)
    {
        $article = $model->create($request->merge([
            'picture' =>$request->photo ? $request->file('photo')->store('categories', 'public') : null,
            'status' => $request->status ? 'published' : 'draft',
            'show_on_homepage' => $request->show_on_homepage ? 1 : 0,
            'publish_date' => $request->publish_date ? Carbon::parse($request->publish_date)->format('Y-m-d') : null,
            'author_id' => auth()->user()->id
        ])->all());
        
        $article->tags()->sync($request->get('tags'));

        return redirect()->route('article.index')->withStatus(__('Article successfully created.'));
    }

    /**
     * Show the form for editing the specified Article
     *
     * @param  \App\Article  $Article
     * @param  \App\Tag   $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function edit(Article $article, Tag $tagModel, Category $categoryModel)
    {
        return view('dashboard.articles.edit', [
            'article' => $article->load('tags'),
            'tags' => $tagModel->get(['id', 'name']),
            'categories' => $categoryModel->get(['id', 'name'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ArticleRequest  $request
     * @param  \App\Article  $Article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update(
            $request->merge([
                'picture' => $request->photo ? $request->photo->store('articles', 'public') : null,
                'status' => $request->status ? 'published' : 'draft',
                'show_on_homepage' => $request->show_on_homepage ? 1 : 0,
                'publish_date' => $request->publish_date ? Carbon::parse($request->publish_date)->format('Y-m-d') : null
            ])->except([$request->hasFile('photo') ? '' : 'picture'])
        );

        $article->tags()->sync($request->get('tags'));

        return redirect()->route('article.index')->withStatus(__('Article successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $Article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')->withStatus(__('Article successfully deleted.'));
    }
}
