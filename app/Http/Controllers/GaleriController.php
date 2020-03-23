<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\M_Galeri;
use App\Stat;
use Auth;
use Carbon\Carbon;
use Image;
use DataTables;
use DB;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = M_Galeri::with('user')->orderBy('tgl_buat', 'desc')->get();
        

        DB::statement(DB::raw('set @rownum=0'));

        $selected = M_Galeri::with('user')->select([
            DB::raw('@rownum  := @rownum  + 1 AS rownum'),
            'id',
            'user_id',
            'judul',
            'status',
            'gambar',
            'tgl_buat'])
            ->orderBy('tgl_buat', 'desc');

        if (request()->ajax()) {
            return DataTables::of($selected)
            ->addColumn('action',function($selected){
                return 
                '<button class="btn btn-xs btn-danger btnDelete" data-remove="'.route('galeri.destroy', $selected->id).'"><i class="fa fa-trash"></i> Hapus Data</button>';
            })
            ->filterColumn('rownum', function($query, $keyword) {
                $query->whereRaw("CONCAT(@rownum  := @rownum) like ?", ["%{$keyword}%"]);
            })
            ->editColumn('gambar', function ($selected) 
            {
                return '<center><img src="'.url('galeri/thumbnail/'.$selected->gambar).'" style="max-height: 100px; background-color: #00aced; max-width: 100px;" class="img-responsive"></center>';
            })
            ->editColumn('dibuat', function ($selected) 
            {
                return $selected->user->name;
            })
            ->rawColumns(['action','gambar','dibuat'])
            ->make(true);
        }
        return view('belakang.galeri.list_galeri');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.galeri.buat_galeri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'filename' => 'required',
                'filename.*' => 'mimes:jpg,png,gif,jpeg'
        ]);
        
        
        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $file)
            {
                // $name = date('dmYHis').uniqid().$file->getClientOriginalName();
                // $file->move(public_path().'/galeri/', $name);  
                // $data[] = $name; 
                $originalImage  = $file;
                $thumbnailImage = Image::make($originalImage);
                $thumbnailPath  = public_path().'/galeri/thumbnail/';
                $originalPath   = public_path().'/galeri/';
                $thumbnailImage->save($originalPath.$originalImage->getClientOriginalName());
                $thumbnailImage->resize(240,160);
                $thumbnailImage->save($thumbnailPath.$originalImage->getClientOriginalName());

                $slug               = str_slug($request->judul, '-');
                $files              = new M_Galeri;
                $files->user_id     = Auth::user()->id;
                $files->judul       = $request->judul;
                $files->status      = $request->status;
                $files->slug        = $slug;
                $files->gambar      = $originalImage->getClientOriginalName();
                $files->tgl_buat    = $request->tgl_buat;
                $files->save(); 
            }
        }

        
        if($files){
            $request->session()->flash('berhasil', 'Galeri berhasil ditambahkan');
            return redirect('/panel/galeri'); 
        }else{
            return redirect('/panel/galeri/create');
        }

        // if($request->hasfile('filename'))
        // {
        //     foreach($request->file('filename') as $file)
        //     {
        //         $name=$file->getClientOriginalName();
        //         $file->move(public_path().'/galeri/', $name);  
        //         $data[] = $name;  
        //     }
        // }

        // $slug               = str_slug($request->judul, '-');
        // $files              = new M_Galeri;
        // $files->user_id     = Auth::user()->id;
        // $files->judul       = $request->judul;
        // $files->status      = $request->status;
        // $files->slug        = $slug;
        // $files->gambar      = json_encode($data);
        // $files->tgl_buat    = $request->tgl_buat;
        // $files->save();
        // if($files){
        //     $request->session()->flash('berhasil', 'Galeri berhasil ditambahkan');
        //     return redirect('/panel/galeri'); 
        // }else{
        //     return redirect('/panel/galeri/create');
        // }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $hapus = M_Galeri::where('id', $id)->first();
        $hapus = M_Galeri::findOrFail($id);
        if ($hapus->gambar) {
            // File::delete('galeri/'.$hapus->gambar);
            // File::delete('galeri/thumbnail/'.$hapus->gambar);
            unlink(public_path('galeri/'.$hapus->gambar));
            unlink(public_path('galeri/thumbnail/'.$hapus->gambar));
            $hapus->delete();
            $data = 'Success';
        }else{
            $data = 'Failed';
        }
        return response()->json($data);
    }
}
