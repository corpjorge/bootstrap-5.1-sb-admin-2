<?php

namespace App\Observers;

use App\Article;
use Illuminate\Support\Facades\File;

class ArticleObserver
{
    /**
     * Handle the User "deleting" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function deleting(Article $article)
    {
        File::delete(storage_path("/app/public/{$article->picture}"));
        
        $article->tags()->detach();
    }

    /**
     * Handle the User "updating" event.
     *
     * @param  \App\Article $article
     * @return void
     */
    public function updating(Article $article)
    {
        if ($article->picture != $article->getOriginal('picture')) {
            File::delete(storage_path("/app/public/{$article->getOriginal('picture')}"));
        }
    }
}
