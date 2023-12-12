<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subjects;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\SubjectRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          if (request()->ajax()) {
            $query = Subjects::query();

            return Datatables::of($query)
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
                                    <a class="dropdown-item" href="' . route('subject.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('subject.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->editColumn('foto_subyek', function ($item) {
                    return $item->foto_subyek ? '<img src="' . Storage::url($item->foto_subyek) . '" style="max-height: 40px;"/>' : '';
                })
                ->rawColumns(['action', 'foto_subyek'])
                ->make();
        }
         return view('pages.admin.subyek.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.subyek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubjectRequest $request)
    {
        $data = $request->all();

        // $data['slug'] = Str::slug($request->title);
        $data['foto_subyek'] = $request->file('foto_subyek')->store('assets/foto_subyek','public');

        Subjects::create($data);

        return redirect()->route('subject.index');
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
        $item = Subjects::findOrFail($id);

        return view('pages.admin.subyek.edit',[
            'item' =>$item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectRequest $request, $id)
    {
        $data = $request->all();

        // $data['slug'] = Str::slug($request->title);
        $data['foto_subyek'] = $request->file('foto_subyek')->store('assets/foto_subyek', 'public');

        $item = Subjects:: findOrFail($id);
        $item->update($data);

        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Subjects:: findOrFail($id);
        $item->delete();
        
        return redirect()->route('subject.index');
    }
}
