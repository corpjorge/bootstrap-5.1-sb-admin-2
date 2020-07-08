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

class TablePagesController extends Controller
{
    /**
     * Display the regular tables page
     *
     * @return \Illuminate\View\View
     */
    public function regularTables()
    {
        return view('dashboard.pages.tables.tables_regular');
    }

    /**
     * Display the extended tables page
     *
     * @return \Illuminate\View\View
     */
    public function extendedTables()
    {
        return view('dashboard.pages.tables.tables_extended');
    }

    /**
     * Display the datatable tables page
     *
     * @return \Illuminate\View\View
     */
    public function datatableTables()
    {
        return view('dashboard.pages.tables.tables_datatable');
    }
}
