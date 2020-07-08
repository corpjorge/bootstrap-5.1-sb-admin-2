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

use App\Http\Controllers\Blog\BlogController;
use App\User;
use App\Article;
class HomeController extends BlogController
{
    /**
     * Show the application home
     *
     * @return \Illuminate\View\View
     */
    public function index(User $user, Article $article)
    {
        $featured_articles = $article->published()->showHomepage()->publishedUntilToday()->orderBy('publish_date', 'desc')->get();
        $latest_articles = $article->published()->publishedUntilToday()->orderBy('publish_date', 'desc')->take(3)->get();
        $authors = $user->userIsAuthor()->take(4)->get();

        return view('blog.home', compact(['featured_articles', 'latest_articles', 'authors']));
    }
}
