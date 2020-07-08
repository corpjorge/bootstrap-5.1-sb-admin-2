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
use App\Category;
use App\User;
use App\Tag;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    function __construct() {
        $navCategories = Category::has('articles', '>', '0')->take(8)->get();
        $footerCategories = Category::has('articles', '>', '0')->take(8)->get();
        $footerAuthors = User::userIsAuthor()->take(8)->get();
        $footerTags = Tag::take(15)->get();
        View::share([
            'navCategories' => $navCategories,
            'footerCategories' => $footerCategories,
            'footerAuthors' => $footerAuthors,
            'footerTags' => $footerTags
        ]);
    }
}
