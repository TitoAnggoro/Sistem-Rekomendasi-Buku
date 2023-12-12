<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\perhitunganIndex;

class DetailController extends Controller
{
    public function index(Request $request, $id)
    {
        $book = Books::with(['covers'])->where('id', $request->id)->firstOrFail();


        $books = Books::join('subjects as s', 's.id', '=', 'books.subjects_id')
            ->select(
                'books.id',
                'books.judul_buku',
                'books.pengarang_1',
                'books.pengarang_2',
                'books.pengarang_3',
                'books.sinopsis',
                's.subyek_1'
            )
            ->get();

            // $books = DB::table('books')
            //     ->leftJoin('subjects', 'books.id', '=', 'subjects.id')
            //     ->leftJoin('covers', 'subjects.id', '=', 'covers.id')
            //     ->select('books.*', 'subjects.subyek_1', 'covers.foto_cover AS covers_foto_cover')
            //     ->get();


            // $books = DB::table('books')
            // ->leftJoin('subjects', 'books.subjects_id', '=', 'subjects.id')
            // ->leftJoin('covers', 'covers.books_id', '=', 'covers.id')
            // ->select('books.*', 'subjects.subyek_1', 'covers.foto_cover')
            // ->get();

            // $books = DB::table('comments')
            //             ->join('users', 'users.id', '=', 'comments.user_id')
            //             ->join('posts', 'posts.id', '=', 'comments.post_id')
            //             ->select('comments.id', 'users.name as user_name', 'posts.title as post_title', 'comments.comment')
            //             ->get();

        $perhitunganIndex = new perhitunganIndex();
        $recommendation = $perhitunganIndex->index($book, $books);

        
        return view('pages.detail', [
            'book' => $book,
            'books' => $recommendation
        ]);
    }
}
