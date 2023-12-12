<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Subjects;
use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function index()
    {
        $totalgenre = Subjects::count();
        $totalbuku = Books::count();
        return view('pages.admin.dashboard',[
            'totalbuku' => $totalbuku,
            'totalgenre' => $totalgenre
        ]);
    }
}
