<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Subjects;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $subjects = Subjects::all();
        $books = Books::with(['covers'])->paginate(32);

        return view('pages.category',[
            'books' => $books,
            'subjects' => $subjects
        ]);
    }

    public function detail(Request $request, $id)
    {
        $subjects = Subjects::all();
        $subject = Subjects::where('id', $id)->firstOrFail();
        $books = Books::where('subjects_id', $subject->id)->paginate($request->input('limit', 12));

        return view('pages.category',[
            'subjects' => $subjects,
            'subject' => $subject,
            'books' => $books
        ]);
    }

    
}
