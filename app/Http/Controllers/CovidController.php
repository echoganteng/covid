<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Auth;
use Carbon\Carbon;
use DB;

class CovidController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $now =Carbon::now()->format('Y-m-d');
        $cek = DB::table('covid')->where('tanggal',$now)->count();

        if($cek>0){

            $data = DB::table('covid')->where('tanggal',$now)
                    ->join('mst_kecamatan','covid.kd_kec','=','mst_kecamatan.ID_KEC')
                    ->get();
        }else{

            $kec = DB::table('mst_kecamatan')->get();
            foreach ($kec as $kecs){
                DB::table('covid')->insert([
                    [
                      'kd_kec' => $kecs->ID_KEC,
                      'tanggal' => $now
                    ]
                ]);
            }

           $data = DB::table('covid')->where('tanggal',$now)
                    ->join('mst_kecamatan','covid.kd_kec','=','mst_kecamatan.ID_KEC')
                    ->get();
        }

        // dd($now);
        return view('belakang.covid.list_covid', compact('data','now'));
    }

    public function indexpost(Request $request)
    {
        $now = $request->tanggal;
        $cek = DB::table('covid')->where('tanggal',$now)->count();

        if($cek>0){

            $data = DB::table('covid')->where('tanggal',$now)
                    ->join('mst_kecamatan','covid.kd_kec','=','mst_kecamatan.ID_KEC')
                    ->get();
        }else{

            $kec = DB::table('mst_kecamatan')->get();
            foreach ($kec as $kecs){
                DB::table('covid')->insert([
                    [
                      'kd_kec' => $kecs->ID_KEC,
                      'tanggal' => $now
                    ]
                ]);
            }

           $data = DB::table('covid')->where('tanggal',$now)
                    ->join('mst_kecamatan','covid.kd_kec','=','mst_kecamatan.ID_KEC')
                    ->get();
        }

        // dd($now);
        return view('belakang.covid.list_covid', compact('data','now'));
    }

    public function indextanggal($tgl)
    {
        $now = $tgl ;
        $cek = DB::table('covid')->where('tanggal',$now)->count();

        if($cek>0){

            $data = DB::table('covid')->where('tanggal',$now)
                    ->join('mst_kecamatan','covid.kd_kec','=','mst_kecamatan.ID_KEC')
                    ->get();
        }else{

            $kec = DB::table('mst_kecamatan')->get();
            foreach ($kec as $kecs){
                DB::table('covid')->insert([
                    [
                      'kd_kec' => $kecs->ID_KEC,
                      'tanggal' => $now
                    ]
                ]);
            }

           $data = DB::table('covid')->where('tanggal',$now)
                    ->join('mst_kecamatan','covid.kd_kec','=','mst_kecamatan.ID_KEC')
                    ->get();
        }

        // dd($now);
        return view('belakang.covid.list_covid', compact('data','now'));
    }

    public function edit($x){
        $id = decrypt($x);
        $data = DB::table('covid')->where('id_covid',$id)
                ->join('mst_kecamatan','covid.kd_kec','=','mst_kecamatan.ID_KEC')
                ->first();
        // dd ($data);

        return view('belakang.covid.ubah_covid', compact('data'));

    }

    public function update(Request $request)
    {
    	$id_covid = decrypt($request->id_covid);
        $tanggal = $request->tanggal;

        // dd ($tanggal);

       	DB::table('covid')
            ->where('id_covid', $id_covid)
            ->update([
              'odp' => $request->odp,
              'pdp' => $request->pdp,
              'positif' => $request->positif
   		 	]);

                return redirect(url('panel/covid/indextanggal/'.$tanggal));
    }
}
