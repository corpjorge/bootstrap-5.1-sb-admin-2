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
use App\Tag;
use App\Http\Controllers\Blog\BlogController;
use App\Article;
class TagController extends BlogController
{
    /**
     * Show tag articles
     * @param App\Tag $tag
     * @return \Illuminate\View\View
     */
    public function index(Tag $tag, Article $article)
    {
        $articles = $article->published()->publishedUntilToday()->tag($tag->id)->orderBy('publish_date', 'desc')->paginate(10);

        return view('blog.articles_tag', compact(['articles', 'tag']));
    }
}
