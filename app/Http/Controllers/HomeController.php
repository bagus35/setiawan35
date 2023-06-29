<?php

namespace App\Http\Controllers;

use App\Models\Magang_Model;
use App\Models\Kalender_Model;
use App\Models\Teknisi;
use App\Models\Event_Model;
use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $event = Event_Model::orderBy('id', 'desc')->take(4)->get();
        $magang = Magang_Model::orderBy('id_magang', 'desc')->take(6)->get();
        $data = [
            'nama_kampus' => 'Politeknik Negri Banyuwangi',
            // 'pengumuman'  => $get_pengumuman,
            'Str'   => Str::class,
        ];
        return view('home', compact('data', 'event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $event
     * @return \Illuminate\Http\Response
     */

    
    public function magang()
    {
        $magang = Magang_Model::orderBy('id_magang', 'desc')->paginate(9);;
        return view('pages.kerjasama_magang', compact('magang'));
    }

    public function kerjasama_magang()
    {
        $magang = Magang_Model::orderBy('id_magang', 'desc')->paginate(9);;
        return view('pages.kerjasama_magang', compact('magang'));
    }

    public function teknisi()
    {
        $teknisi=Teknisi::all();
        return view('pages.teknisi', compact('teknisi'));
    }
    
}
