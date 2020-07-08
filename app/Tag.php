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

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'color'];

    /**
     * Get the articles of the tag
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    /**
     * Get the route key for the tag.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
