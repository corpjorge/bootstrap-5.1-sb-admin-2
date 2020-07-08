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

class MapPagesController extends Controller
{
    /**
     * Display the google maps page
     *
     * @return \Illuminate\View\View
     */
    public function googleMaps()
    {
        return view('dashboard.pages.maps.maps_google');
    }

    /**
     * Display the full screen maps page
     *
     * @return \Illuminate\View\View
     */
    public function fullscreenMaps()
    {
        return view('dashboard.pages.maps.maps_fullscreen');
    }

    /**
     * Display the vector maps page
     *
     * @return \Illuminate\View\View
     */
    public function vectorMaps()
    {
        return view('dashboard.pages.maps.maps_vector');
    }
}
