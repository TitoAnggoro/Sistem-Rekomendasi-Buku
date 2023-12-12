<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Subjects;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $books = Books::where('judul_buku','LIKE','%'.$request->search.'%')->get();

        
        } else{
            $books = Books::all();
        }
        
        return view('pages.book',[
            'books' => $books,
          
        ]);
    }

}
