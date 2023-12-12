<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Subjects;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $subjects = Subjects::take(6)->get();
        $books = Books::with('covers')->take(8)->get();

        return view('pages.home',[
            'subjects' => $subjects,
            'books' => $books
        ]);
    }
}
