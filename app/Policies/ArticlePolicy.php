<?php

namespace App\Policies;

use App\User;
use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can see the articles.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function viewAny(User $user){
        return true;
    }

    /**
     * Determine whether the user can create article.
     *
     * @param  \App\User  $user
     * @return boolean
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isAuthor();
    }

    /**
     * Determine whether the user can update the article.
     *
     * @param  \App\User  $user
     * @param  \App\Article  $article
     * @return boolean
     */
    public function update(User $user, Article $article)
    {
        return $user->isAdmin() || $user->isAuthor();
    }

    /**
     * Determine whether the user can delete the article.
     *
     * @param  \App\User  $user
     * @param  \App\Article $article
     * @return boolean
     */
    public function delete(User $user, Article $article)
    {
        return $user->isAdmin() || $user->isAuthor();
    }
}
