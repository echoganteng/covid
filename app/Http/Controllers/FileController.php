<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Files;
use App\Stat;
use Auth;
use Carbon\Carbon;

class FileController extends Controller
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
        $files = Files::with('user')->orderBy('id', 'desc')->get();
        return view('belakang.dokumen.list_dokumen', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.dokumen.buat_dokumen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = str_slug($request->judul, '-');
        $files = new Files;
        $files->user_id=Auth::user()->id;
        $files->judul=$request->judul;
        $files->status=$request->status;
        $files->slug=$slug;
        if(!empty($request->filepath)){
            $files->files =$request->filepath;
        }
        $files->tgl_buat=$request->tgl_buat;
        $files->save();
        if($files){
            $request->session()->flash('berhasil', 'Dokumen berhasil ditambahkan');
            return redirect('/panel/dokumen'); 
        }else{
            return redirect('/panel/dokumen/create');
        }
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
        $files = Files::findOrFail($id);
        $stats = Stat::all();
        return view('belakang.dokumen.ubah_dokumen', compact('files','stats'));
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
        $files = Files::find($id);
        $slug = str_slug($request->judul, '-');
        $files->judul=$request->judul;
        $files->status=$request->status;
        $files->slug=$slug;
        if(!empty($request->filepath)){
            $files->files =$request->filepath;
        }
        $files->tgl_ubah=Carbon::now();
        $files->save();
        if($files){
            $request->session()->flash('berhasil', 'Data dokumen berhasil diubah');
            return redirect('/panel/dokumen'); 
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $files = Files::findOrFail($id);
        $files_path = public_path().$files->files;
        // return $files_path;
        unlink($files_path);
        $files->delete();
        session()->flash('berhasil', 'Dokumen berhasil dihapus');
        return redirect('/panel/dokumen');
    }
}
