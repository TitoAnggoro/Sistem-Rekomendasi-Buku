<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSubyekController extends Controller
{
    public function index()
    {
        return view('pages.admin.subyek.index');
    }

    public function create()
    {
        return view('pages.admin.subyek.create');
    }

    public function details()
    {
        return view('pages.admin.subyek.details');
    }
}
