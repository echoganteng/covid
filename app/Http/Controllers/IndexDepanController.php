<?php



namespace App\Http\Controllers;



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



class IndexDepanController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $almt = Alamat::findOrFail(1);

        $menus = Mainmenu::with('children')->where('parent','=',0)->orderBy('urutan')->get();

        $posts1 = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->skip(0)->take(3)->get();

        $posts2 = Post::where('status', 'publish')->orderBy('tgl_buat','desc')->skip(3)->take(3)->get();

        $infos1 = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->skip(0)->take(3)->get();

        $infos2 = Info::where('status', 'publish')->orderBy('tgl_buat','desc')->skip(3)->take(3)->get();

        

        $sosmeds = Sosmed::all();

        $slides = Slider::orderBy('id','desc')->get();

        $images = M_Galeri::where('status', 'publish')->orderBy('tgl_buat','desc')->skip(0)->take(6)->get();

        $opini = M_Opini::where('status', 'publish')->orderBy('tgl_buat','desc')->take(8)->get();
        $resensi = M_Resensi::where('status', 'publish')->orderBy('tgl_buat','desc')->skip(0)->take(3)->get();

        $video = M_Youtube::where('status', 'publish')->orderBy('created_at','desc')->skip(0)->take(2)->get();

        return view('depan.depan', compact('almt','menus','opini','posts1','posts2','resensi','infos1','infos2','sosmeds','map','slides','images', 'video'));

    }

}

