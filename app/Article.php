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
namespace App;

use App\Tag;
use App\Category;
use Carbon\Carbon;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'content', 'picture', 'category_id', 'status', 'publish_date', 'show_on_homepage', 'author_id', 'read_time', 'excerpt',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date', 'publish_date'
    ];

    /**
     * Get the category of the article
     *
     * @return \App\Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The author that belong to the article.
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the tags of the article
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
     /**
     * Get the comments of the article
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the path to the picture
     *
     * @return string
     */
    public function path()
    {
        return "/storage/{$this->picture}";
    }

    /**
     * Get the route key for the article.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Scope a query to only include articles different from current article
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDifferentFromCurrentArticle($query, $current_article)
    {
        return $query->where('id', '!=', $current_article);
    }

    /**
     * Scope a query to only include articles
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeArticle($query, $id)
    {
        return $query->where('author_id', $id);
    }

    /**
     * Scope a query to only include published articles
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope a query to only include show on homepage articles
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeShowHomepage($query)
    {
        return $query->where('show_on_homepage', 1);
    }

    /**
     * Scope a query to only include posted articles until today
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublishedUntilToday($query)
    {
        return $query->whereDate('publish_date', '<=', Carbon::today()->toDateString());
    }

    /**
     * Scope a query to only include articles with a specified category
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param $id -> The id of the category
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCategory($query, $id)
    {
        return $query->whereHas('category', function ($q) use ($id) {
            $q->where('id', $id);
        });
    }

    /**
     * Scope a query to only include articles that belongs to an author
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param $id -> The id of the author
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAuthor($query, $id)
    {
        return $query->whereHas('author', function($q) use($id) {
            $q->where('id', $id);
        });
    }

    /**
     * Scope a query to only include articles with a specified tag
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param $id -> The id of the tag
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTag($query, $id)
    {
        return $query->whereHas('tags', function($q) use($id) {
            $q->where('id', $id);
        });
    }

    /**
     * Scope a query to only include articles which contains searching words
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param $searching -> The searching words
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $searching)
    {
        return $query->where('title', 'LIKE', "%{$searching}%")
                     ->orWhere('content', 'LIKE', "%{$searching}%")
                     ->orWhere('excerpt', 'LIKE', "%{$searching}%");
    }
}
