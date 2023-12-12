<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Circulation;
use Yajra\DataTables\Facades\DataTables;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query =
                Circulation::with(['books']);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('terima', $item->id) . '">
                                        Sudah Dikembalikan
                                    </a>
                                    <form action="' . route('peminjaman.edit', $item->id) . '">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Edit
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.admin.Peminjaman.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $peminjaman = Circulation::all();

        $books = Books::all();

        // $data = DB::table('books')->where('id',$id)->first();
        // // dd($data);
        // $update = array(
        //     'nomor_induk' => $data->nomor_induk,
        //     'nomor_induk' => $data->nomor_induk,
        //     'subjects_id' => $data->subjects_id,
        //     'judul_buku' => $data->judul_buku,
        //     'pengarang_1' => $data->pengarang_1,
        //     'pengarang_2' => $data->pengarang_2,
        //     'pengarang_3' => $data->pengarang_3,
        //     'sinopsis' => $data->sinopsis,
        //     'bahasa' => $data->bahasa,
        //     'isbn' => $data->isbn,
        //     'jumlah' => $data->jumlah -1,
        //     'penerbit' => $data->penerbit,
        //     'status ' => $data->status,
        //     'status_koleksi' => $data->status_koleksi,


        // );

        // DB::table('books')->update($update);


        // $data = DB::table('Books')->where('id')->first();
        // if ($data) {
        //     $books = $data->jumlah - 1;
        // }
        return view('pages.admin.Peminjaman.create', [
            'peminjaman' => $peminjaman,
            'books' => $books
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();


        Circulation::create($data);

        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = Circulation::findOrFail($id);

        return view('pages.admin.Peminjaman.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Circulation::findOrFail($id);
        $item->update($data);

        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function kurangidata($id)
    // {
    //     //         $data = DB::table('circulations')->where('id',$id)->first();
    //     // // dd($data);
    //     // $update = array(
    //     //     'nomor_induk' => $data->nomor_induk,
    //     //     'nomor_induk' => $data->nomor_induk,
    //     //     'subjects_id' => $data->subjects_id,
    //     //     'judul_buku' => $data->judul_buku,
    //     //     'pengarang_1' => $data->pengarang_1,
    //     //     'pengarang_2' => $data->pengarang_2,
    //     //     'pengarang_3' => $data->pengarang_3,
    //     //     'sinopsis' => $data->sinopsis,
    //     //     'bahasa' => $data->bahasa,
    //     //     'isbn' => $data->isbn,
    //     //     'jumlah' => $data->jumlah -1,
    //     //     'penerbit' => $data->penerbit,
    //     //     'status ' => $data->status,
    //     //     'status_koleksi' => $data->status_koleksi,


    //     // );

    // }

    public function kurangistok($id)
    {
        $data = DB::table('books')->where('id', $id)->first();
        // dd($data);
        $update = array(
            'nomor_induk' => $data->nomor_induk,
            'nomor_induk' => $data->nomor_induk,
            'subjects_id' => $data->subjects_id,
            'judul_buku' => $data->judul_buku,
            'pengarang_1' => $data->pengarang_1,
            'pengarang_2' => $data->pengarang_2,
            'pengarang_3' => $data->pengarang_3,
            'sinopsis' => $data->sinopsis,
            'bahasa' => $data->bahasa,
            'isbn' => $data->isbn,
            'jumlah' => $data->jumlah -1,
            'penerbit' => $data->penerbit,
            'status ' => $data->status,
            'status_koleksi' => $data->status_koleksi,




        );
        dd($data);
        DB::table('books')->update($update);
        // DB::table('books')->where('id', $id)->update();
      

        $data = $id->all();


        Circulation::create($data);

        return redirect()->route('peminjaman.index');
    }


    public function terima($id)
    {
        $data = DB::table('circulations')->where('id', $id)->first();
        // dd($data);
        $insert = array(

            'nim' => $data->nim,
            'nomor_induk' => $data->nomor_induk,
            'jenis_koleksi' => $data->jenis_koleksi,
            'tgl_pinjam' => $data->tgl_pinjam,
            'tgl_kembali_1' => $data->tgl_kembali_1,
            // 'tgl_kembali_2' => $data->tgl_kembali_2,
            // 'sts_wajib' => $data->sts_wajib,
            // 'sts_wajib_kbl' => $data->sts_wajib_kbl,



            // 'name' => $data->name,
            // 'categories_id' => $data->categories_id,
            // 'users_id' => Auth::user()->id,
            // // 'provinces_id' => $data->provinces_id,
            // // 'regencies_id' => $data->regencies_id,
            // 'lokasi' => $data->lokasi,
            // // 'photos' => $data->photos,
            // 'description' => $data->description,
            // 'slug' => Str::slug($data->name)
        );

        DB::table('pengembalians')->insert($insert);
        DB::table('circulations')->where('id', $id)->delete();

        
        return redirect()->route('peminjaman.index');
    }
}
