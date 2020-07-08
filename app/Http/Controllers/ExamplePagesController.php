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

use App\Article;
use App\User;
use App\Tag;
use Illuminate\Support\Facades\DB;

class ExamplePagesController extends Controller
{
    /**
     * Display the pricing page
     *
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        return view('dashboard.pages.example_pages.pricing');
    }

    /**
     * Display the lock page
     *
     * @return \Illuminate\View\View
     */
    public function lock()
    {
        return view('dashboard.pages.example_pages.lock');
    }

    /**
     * Display the dashboard page
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
         $modelArticles = new Article;
         $modelUsers = new User;
         $modelTags = new Tag;
         $tags = $modelTags->all();
         $users = $modelUsers->all();
         $articles = $modelArticles->all();
         $query =DB::select( DB::raw('select tags.name ,articles.title,count(comments.id) comm
         from articles join article_tag 
         on (articles.id = article_tag.article_id)
         join tags on (tags.id = article_tag.tag_id)
         join comments on(articles.id = comments.article_id)
         group by tags.name,articles.title'));
         $top = [];
         $query1 = $query;
            for($i =0;$i<=count($query)-2;$i++){
                for($j=$i+1;$j<=count($query)-1;$j++){
                    if($query[$i]->name == $query[$j]->name){
                        unset($query1[$j]);
                    }
                }
            }
        return view('dashboard.pages.dashboard', ['articles'=>$articles,'users'=>$users,'query'=>$query1,'tags'=>$tags]);
    }

    /**
     * Display the rtl support page
     *
     * @return \Illuminate\View\View
     */
    public function rtlSupport()
    {
        return view('dashboard.pages.example_pages.language');
    }

    /**
     * Display the rtl support page
     *
     * @return \Illuminate\View\View
     */
    public function error()
    {
        return view('dashboard.pages.example_pages.error');
    }

    /**
     * Display the timeline page
     *
     * @return \Illuminate\View\View
     */
    public function timeline()
    {
        return view('dashboard.pages.example_pages.timeline');
    }

    /**
     * Display the widgets page
     *
     * @return \Illuminate\View\View
     */
    public function widgets()
    {
        return view('dashboard.pages.widgets');
    }

    /**
     * Display the charts page
     *
     * @return \Illuminate\View\View
     */
    public function charts()
    {
        return view('dashboard.pages.charts');
    }

    /**
     * Display the calendar page
     *
     * @return \Illuminate\View\View
     */
    public function calendar()
    {
        return view('dashboard.pages.calendar');
    }
}
