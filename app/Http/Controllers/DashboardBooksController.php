<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardBooksController extends Controller
{
    public function index()
    {
        return view('pages.admin.books.index');
    }

        public function create()
    {
        return view('pages.admin.books.create');
    }

    public function details()
    {
        return view('pages.admin.books.details');
    }
}
