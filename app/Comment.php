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

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content','author_id','article_id', 'parent_id'
    ];
    /**
     * The comment that belong to the author.
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The comment that belong to the article.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    /**
     * The childrens of a comment(reply).
     */
    public function childrens()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
