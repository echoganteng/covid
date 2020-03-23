<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ResensiRequest;
use App\M_Resensi;
use App\Stat;
use Auth;
use Carbon\Carbon;

class ResensiController extends Controller
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
        $resensi = M_Resensi::with('user')->orderBy('id', 'desc')->get();
        return view('belakang.resensi.list_resensi', compact('resensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.resensi.buat_resensi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResensiRequest $request)
    {
        $slug               = str_slug($request->judul, '-');
        $Resensi              = new M_Resensi;
        $Resensi->user_id     = Auth::user()->id;
        $Resensi->isi_resensi = $request->resensi;
        $Resensi->judul       = $request->judul;
        $Resensi->status      = $request->status;
        $Resensi->slug        = $slug;
        if(!empty($request->filepath)){
            $Resensi->gambar =$request->filepath;
        }
        $Resensi->tgl_buat = $request->tgl_buat;
        $Resensi->save();
        if($Resensi){
            $request->session()->flash('berhasil', 'Resensi berhasil ditambahkan');
            return redirect('/panel/resensi'); 
        }else{
            return redirect('/panel/resensi/create');
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
        $resensi = M_Resensi::findOrFail($id);
        $stats = Stat::all();
        return view('belakang.resensi.ubah_resensi', compact('resensi','stats'));
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
        $Resensi               = M_Resensi::find($id);
        $slug                  = str_slug($request->judul, '-');
        $Resensi->isi_resensi  = $request->resensi;
        $Resensi->judul        = $request->judul;
        $Resensi->status       = $request->status;
        $Resensi->slug         = $slug;
        if(!empty($request->filepath)){
            $Resensi->gambar = $request->filepath;
        }
        $Resensi->tgl_ubah     = Carbon::now();
        $Resensi->save();
        if($Resensi){
            $request->session()->flash('berhasil', 'Data resensi berhasil diubah');
            return redirect('/panel/resensi'); 
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
        M_Resensi::destroy($id);
        session()->flash('berhasil', 'Resensi berhasil dihapus');
        return redirect('/panel/resensi');
    }
}
