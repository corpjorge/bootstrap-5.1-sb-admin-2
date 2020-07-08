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
use App\Http\Controllers\Blog\BlogController;
use Illuminate\Http\Request;
use App\Article;

class SearchController extends BlogController
{
    /**
     * Show articles that have searching words in it
     * @param $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request, Article $article)
    {
        $searching = $request->input('searching');
        $articles = $article->published()->publishedUntilToday()->search($searching)->paginate(10);

        return view('blog.articles_search', compact(['articles', 'searching']));
    }
}
