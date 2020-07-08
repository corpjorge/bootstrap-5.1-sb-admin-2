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

use App\Category;
use App\Article;
use App\Http\Controllers\Blog\BlogController;

class CategoryController extends BlogController
{
    /**
     * Show category articles
     * @param App\Category $category
     * @return \Illuminate\View\View
     */
    public function index(Category $category, Article $article)
    {
        $articles = $article->published()
            ->publishedUntilToday()
            ->category($category->id)
            ->orderBy('publish_date', 'desc')
            ->paginate(10);

        return view('blog.articles_category', compact(['articles', 'category']));
    }
}
