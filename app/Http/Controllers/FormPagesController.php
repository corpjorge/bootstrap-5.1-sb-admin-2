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

class FormPagesController extends Controller
{
    /**
     * Display the regular forms page
     *
     * @return \Illuminate\View\View
     */
    public function regularForms()
    {
        return view('dashboard.pages.forms.form_regular');
    }

    /**
     * Display the extended forms page
     *
     * @return \Illuminate\View\View
     */
    public function extendedForms()
    {
        return view('dashboard.pages.forms.form_extended');
    }

    /**
     * Display the validation forms page
     *
     * @return \Illuminate\View\View
     */
    public function validationForms()
    {
        return view('dashboard.pages.forms.form_validation');
    }

    /**
     * Display the wizard forms page
     *
     * @return \Illuminate\View\View
     */
    public function wizardForms()
    {
        return view('dashboard.pages.forms.form_wizard');
    }
}
