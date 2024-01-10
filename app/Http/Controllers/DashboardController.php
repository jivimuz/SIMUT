<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $main['pageTitle'] = 'Dashboard';
        $main['subTitle'] = 'sa';
        $main['contentView'] = 'Dashboard';
        return view('index', compact('main'));
    }
}
