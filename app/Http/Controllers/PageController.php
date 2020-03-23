<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Mainmenu;

use App\Alamat;

use App\Sosmed;

use App\Post;

use App\Info;

use App\Files;

use App\M_Galeri;

use App\M_Opini;

use App\M_Resensi;

use GuzzleHttp\Client;

use GuzzleHttp\RequestOptions;

use Illuminate\Support\Facades\File;

use DataTables;

use Illuminate\Support\Facades\Storage;

use DB;



class PageController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function indexberita()

    {

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $list = Post::with('user')->orderBy('tgl_buat', 'desc')->paginate(4);

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.list_berita', compact('almt','sosmeds','menus','posts','infos','list'));

    }

    public function indexinformasi()

    {

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $list = Info::with('user')->orderBy('tgl_buat', 'desc')->paginate(4);

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.list_info', compact('almt','sosmeds','menus','posts','infos','list'));

    }



    public function indexpengaduan()

    {

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $list = Info::with('user')->orderBy('id', 'desc')->paginate(4);

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();



        $client = new Client();

        $request = $client->get('http://sidumas.situbondokab.go.id/api/view_kategori');

        $response = json_decode($request->getBody()->getContents());

        // return $persons;



        $client1 = new Client();

        $request1 = $client1->get('http://sidumas.situbondokab.go.id/api/view_pengaduan');

        $response1 = json_decode($request1->getBody()->getContents());

        $id_terakhir = 0;

        for($i = 0; $i < count($response1); $i++)

        {

            if((int)$response1[$i]->{"id"} > (int)$id_terakhir)

                $id_terakhir = (int)$response1[$i]->{"id"};

        }



        $hastag = 'LAPOR';

        $no = 1;

        if($id_terakhir){

            $format = sprintf( $hastag.'-'.abs($id_terakhir+1));

            // return $format;

            // return view ('backend.laporan.admin.tambah_lapor', compact('format','kategori','opd1'));

            return view('depan.isi.pengaduan', compact('almt','sosmeds','menus','posts','infos','list','response','format'));

        }else{

            $format = sprintf( $hastag.'-'.abs($no));

            // return $format;

            // return view ('backend.laporan.admin.tambah_lapor', compact('format','kategori','opd1'));

            return view('depan.isi.pengaduan', compact('almt','sosmeds','menus','posts','infos','list','response','format'));

        }



        // return $max;

        // return view('depan.isi.pengaduan', compact('almt','sosmeds','menus','posts','infos','list','response'));

    }



    public function kirim_pengaduan(Request $request)

    {

        //isi data

        $data_string =array(

            'id_lapor'  => $request->get('id_lapor'),

            'nama'      => $request->get('nama'),

            'hp'        => $request->get('hp'),

            'alamat'    => $request->get('alamat'),

            'isi'       => $request->get('isi'),

            'ket'       => $request->get('ket'),

            'lokasi'    => $request->get('lokasi'),

            'file'      => base64_encode(file_get_contents($request->file('gambar')->path()))

        );

        // $data_string = json_encode($entry);



        $url = 'http://sidumas.situbondokab.go.id/api/kirim_pengaduan';

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_TIMEOUT, 30);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array(

            'Content-Type:multipart/form-data')

        );

        curl_setopt($curl, CURLOPT_POST, 1);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($status == 200) {

	        // $json = json_decode($response, TRUE);

	        // return $json;

            // return response()->json($response);

            $errmsg = "File uploaded successfully";

	    } else {

	        $errmsg = curl_error($curl);

	    }

        // if ($status != 200) {

        //     die("Error: call to URL $url failed with status $status, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));

        // }

        curl_close($curl);

        return response()->json(['success' => true]);

        // return redirect('/pengaduan');

     //    $result = [

	    //   	'result'	=> $response

	    // ];



    	// return $result;



        // $data = array(

        //     'id_lapor'  => $request->get('id_lapor'),

        //     'nama'      => $request->get('nama'),

        //     'hp'        => $request->get('hp'),

        //     'alamat'    => $request->get('alamat'),

        //     'isi'       => $request->get('isi'),

        //     'ket'       => $request->get('ket'),

        //     'file'      => base64_encode(file_get_contents($request->file('gambar')->path()))

        // );   

        // $headers = array(

        //     'Content-type: multipart/form-data',

        //     'charset: utf-8',

        //     'Cache-Control: no-cache'

        //     );

              

        // $curl_handle = curl_init();

        // curl_setopt($curl_handle, CURLOPT_URL,  'http://sidumas.situbondokab.go.id/api/kirim_pengaduan');

        // curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

        // curl_setopt($curl_handle, CURLOPT_POST, 1);

        // curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers);

        // curl_setopt($curl_handle, CURLOPT_POSTFIELDS, json_encode($data));



        // $buffer = curl_exec($curl_handle);

        // curl_close($curl_handle);

        // $result = json_decode($buffer);

        

        // return response()->json($result);



        // if(!curl_errno($curl))

        // {

        //     $info = curl_getinfo($curl);

        //     if ($info['http_code'] == 200)

        //         $errmsg = "File uploaded successfully";

        // }

        // else

        // {

        //     $errmsg = curl_error($curl);

        // }

        // curl_close($curl);



        // return response()->json(json_decode(($response)));

        // return response()->json(json_decode(($response)));



        // return $entry;



        // $client = new Client();

        // $client->post($endpoint, $options);

        // return $client;

        // return redirect()->action('ClientPersonController@index');



        // $extension  = $request->file('gambar');

        // $extension  = $request->file('gambar')->getClientOriginalExtension();

        // $lokasi     = public_path('img/photo_pengaduan');

        // $filename   = uniqid().'_'.time().'_'.date('Ymd').'.'.$extension;

        // $request->file('gambar')->move($lokasi, $filename);



        // $cFile = curl_file_create($lokasi);



        // //isi data

        // $entry =array(

        //     'id_lapor'  => $request->get('id_lapor'),

        //     'nama'      => $request->get('nama'),

        //     'hp'        => $request->get('hp'),

        //     'alamat'    => $request->get('alamat'),

        //     'isi'       => $request->get('isi'),

        //     'ket'       => $request->get('ket')

        // );

        // $data_string = json_encode($entry); 



                                                                                       

        // //mengirim data                                                                                                                     

        // $ch = curl_init('http://sidumas.situbondokab.go.id/api/kirim_pengaduan');                                                                      

        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     

        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  

        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      

        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          

        //     'Content-Type: application/json',

        //     // 'Authorization: Bearer pT5IRlFXYamPG1bvxeNmRouF6bJpsCv9',

        //     'Content-Length: ' . strlen($data_string))                                                                       

        // );

        // curl_setopt($ch, CURLOPT_TIMEOUT, 300);                                                                                         

        // $result = curl_exec($ch);



        // // MENAMPILKAN RESPON

        // $break = json_decode($result);

        // return redirect()->route('pengaduan')->with('success','Pengaduan added successfully...');

        // return redirect()->action('PageController@indexpengaduan');

        // echo "Kode status = ".$break->status_code."<br/>";

        // echo "Pesan = ".$break->pesan."<br/>";



        



        // $file = $request->file('gambar');

        // $name = time() . '_' . $file->getClientOriginalName();

        // $path = storage_path('img/photo_pengaduan/');



        // $resource = fopen($file,"r") or die("File upload Problems");



        // $file->move($path, $name);



        // $client = new Client();

        // $res = $client->request('POST', 'http://sidumas.situbondokab.go.id/api/kirim_pengaduan', [

        //     'multipart' => [

        //         [

        //             'name'     => 'body',

        //             'contents' => json_encode([

        //                     'id_lapor'  => $request->get('id_lapor'),

        //                     'nama'      => $request->get('nama'),

        //                     'hp'        => $request->get('hp'),

        //                     'alamat'    => $request->get('alamat'),

        //                     'isi'       => $request->get('isi'),

        //                     'ket'       => $request->get('ket')

        //             ]),

        //             'headers'  => ['Content-Type' => 'application/json']

        //         ]

        //         // [

        //         //     'name'     => 'file',

        //         //     'contents' => file_get_contents($path . $name)

        //         // ],

        //     ],

        // ]);



        // if($res->getStatusCode() != 200) exit("Something happened, could not retrieve data");

        // $response = json_decode($res->getBody());

        // exit();

    }

    public function indexopini()

    {

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $list = M_Opini::with('user')->orderBy('tgl_buat', 'desc')->paginate(4);

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.list_opini', compact('almt','sosmeds','menus','posts','infos','list'));

    }

    public function indexresensi()

    {

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $list = M_Resensi::with('user')->orderBy('tgl_buat', 'desc')->paginate(4);

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.list_resensi', compact('almt','sosmeds','menus','posts','infos','list'));

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        //

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function halaman($x)

    {

        $halaman = Mainmenu::where('alamat', $x)->first();

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.halaman', compact('halaman','almt','sosmeds','menus','posts','infos'));

    }

    public function detilberita($x)

    {

        $halaman = Post::where('slug', $x)->first();

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.detil_berita', compact('halaman','almt','sosmeds','menus','posts','infos'));

    }

    public function detilinformasi($x)

    {

        $halaman = Info::where('slug', $x)->first();

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.detil_info', compact('halaman','almt','sosmeds','menus','posts','infos'));

    }

    public function detilopini($x)

    {

        $halaman = M_Opini::where('slug', $x)->first();

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.detil_opini', compact('halaman','almt','sosmeds','menus','posts','infos'));

    }

    public function detilresensi($x)

    {

        $halaman = M_Resensi::where('slug', $x)->first();

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        return view('depan.isi.detil_resensi', compact('halaman','almt','sosmeds','menus','posts','infos'));

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

        //

    }



    public function indexdownload()

    {

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $list = Info::with('user')->orderBy('id', 'desc')->paginate(4);

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        // $data = Files::all();

        return view('depan.isi.download', compact('almt','sosmeds','menus','posts','infos','list'));

    }



    public function json(Request $request){

        DB::statement(DB::raw('set @rownum=0'));

        $data = Files::select([

                DB::raw('@rownum  := @rownum  + 1 AS rownum'),

                'id',

                'user_id',

                'judul', 

                'files', 

                'status', 

                'slug', 

                'tgl_buat', 

                'tgl_ubah'])
                ->where('status', 'publish')
                ->orderBy('tgl_buat', 'DESC');



        if (request()->ajax()) {

            return DataTables::of($data)

            ->addColumn('action',function($data){

                return 

                '<a href="'.url($data->files).'" class="btn btn-primary btn-sm" target="_BLANK"><i class="icon-cloud-download"></i> Download</a>';

            })

            ->filterColumn('rownum', function($query, $keyword) {

                $query->whereRaw("CONCAT(@rownum  := @rownum) like ?", ["%{$keyword}%"]);

            })

            ->rawColumns(['action'])

            ->make(true);

        }

    }

    public function indexgaleri()

    {

        $almt = Alamat::findOrFail(1);

        $sosmeds = Sosmed::all();

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $list = M_Galeri::with('user')->orderBy('id', 'desc')->paginate(9);

        $posts = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        $infos = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->take(3)->get();

        // $data = Files::all();

        return view('depan.galeri_list', compact('almt','sosmeds','menus','posts','infos','list'));

    }

}

