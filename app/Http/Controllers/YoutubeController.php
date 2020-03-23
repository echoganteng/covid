<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\YoutubeRequest;
use App\M_Youtube;
use App\Stat;
use Auth;
use Carbon\Carbon;

class YoutubeController extends Controller
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
        $video = M_Youtube::with('user')->orderBy('id', 'desc')->get();
        return view('belakang.youtube.list_video', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.youtube.buat_video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(YoutubeRequest $request)
    {
        $Video               = new M_Youtube;
        $Video->user_id      = Auth::user()->id;
        $Video->judul        = $request->judul;
        $Video->status       = $request->status;
        $Video->link         = $request->link;
        $Video->thumbnail    = 'http://img.youtube.com/vi/'.$request->thumbnail.'/maxresdefault.jpg';
        // $Video->created_at   = Carbon::now()->format('Y-m-d H:i:s');;
        $Video->save();
        if($Video){
            $request->session()->flash('berhasil', 'Video berhasil ditambahkan');
            return redirect('/panel/video'); 
        }else{
            return redirect('/panel/video/create');
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
        $video = M_Youtube::findOrFail($id);
        $stats = Stat::all();
        return view('belakang.youtube.ubah_video', compact('video','stats'));
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
        $Video               = M_Youtube::find($id);
        $Video->judul        = $request->judul;
        $Video->status       = $request->status;
        $Video->link         = $request->link;
        $Video->thumbnail    = $request->thumbnail;
        $Video->save();
        if($Video){
            $request->session()->flash('berhasil', 'Data berita berhasil diubah');
            return redirect('/panel/video'); 
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
        M_Youtube::destroy($id);
        session()->flash('berhasil', 'Video berhasil dihapus');
        return redirect('/panel/video');
    }
}
