<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardcoversController extends Controller
{
    public function index()
    {
        return view('pages.admin.covers.index');
    }

        public function create()
    {
        return view('pages.admin.covers.create');
    }

    public function details()
    {
        return view('pages.admin.covers.details');
    }
}
