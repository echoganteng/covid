<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Alamat;
use App\Mainmenu;
use App\Post;
use App\Info;
use App\Sosmed;
use App\Map;
use App\Slider;
use App\M_Galeri;
use App\M_Opini;
use App\M_Resensi;
use App\M_Youtube;
use Illuminate\Support\Facades\DB;

class IndexDepanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $data = DB::table('v_covid')->get();
        return view('depan.depan', compact('data'));
//        return response()->json($data);
    }
}

