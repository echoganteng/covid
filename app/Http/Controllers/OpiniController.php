<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OpiniRequest;
use App\M_Opini;
use App\Stat;
use Auth;
use Carbon\Carbon;

class OpiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $opini = M_Opini::with('user')->orderBy('id', 'desc')->get();
        return view('belakang.opini.list_opini', compact('opini'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.opini.buat_opini');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OpiniRequest $request)
    {
        $slug               = str_slug($request->judul, '-');
        $Opini              = new M_Opini;
        $Opini->user_id     = Auth::user()->id;
        $Opini->isi_opini   = $request->opini;
        $Opini->judul       = $request->judul;
        $Opini->status      = $request->status;
        $Opini->slug        = $slug;
        if(!empty($request->filepath)){
            $Opini->gambar =$request->filepath;
        }
        $Opini->tgl_buat = $request->tgl_buat;
        $Opini->save();
        if($Opini){
            $request->session()->flash('berhasil', 'Opini berhasil ditambahkan');
            return redirect('/panel/opini'); 
        }else{
            return redirect('/panel/opini/create');
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
        $opini = M_Opini::findOrFail($id);
        $stats = Stat::all();
        return view('belakang.opini.ubah_opini', compact('opini','stats'));
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
        $Opini               = M_Opini::find($id);
        $slug                = str_slug($request->judul, '-');
        $Opini->isi_opini    = $request->opini;
        $Opini->judul        = $request->judul;
        $Opini->status       = $request->status;
        $Opini->slug         = $slug;
        if(!empty($request->filepath)){
            $Opini->gambar = $request->filepath;
        }
        $Opini->tgl_ubah     = Carbon::now();
        $Opini->save();
        if($Opini){
            $request->session()->flash('berhasil', 'Data opini berhasil diubah');
            return redirect('/panel/opini'); 
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
        M_Opini::destroy($id);
        session()->flash('berhasil', 'Opini berhasil dihapus');
        return redirect('/panel/opini');
    }
}
