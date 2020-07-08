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

use Newsletter;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    /**
     * Store a newly email in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterRequest $request)
    {
        if (! Newsletter::isSubscribed($request->newsletter_email)) {
            Newsletter::subscribe($request->newsletter_email);
        }
        return redirect()->to(url()->previous() . '#newsletter');
    }
   
}
