<?php

namespace App\Http\Controllers;

use App\Models\Alumni_Model;
use App\Models\Magang_Model;
use App\Models\Kalender_Model;
use App\Models\Teknisi;
use App\Models\Fasilitas;
use App\Models\Banner;
use App\Models\Event_Model;
use App\Models\Home;
use App\Models\Pengumuman_Model;
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
        $Mpengumuman = new Pengumuman_Model();

        $banner = Banner::orderBy('id_banner', 'desc')->take(3)->get();
        $event = Event_Model::orderBy('id', 'desc')->take(4)->get();
        $alumni = Alumni_Model::orderBy('id_alumni', 'desc')->take(5)->get();
        $magang = Magang_Model::orderBy('id_magang', 'desc')->take(6)->get();
        $pengumuman = $Mpengumuman->get_pengemumuman();
        $data = [
            'nama_kampus' => 'Politeknik Negri Banyuwangi',
            // 'pengumuman'  => $get_pengumuman,
            'banner'        => $banner,
            'Str'   => Str::class,
        ];
        return view('home', compact('data', 'banner', 'pengumuman', 'event', 'alumni'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $event
     * @return \Illuminate\Http\Response
     */
    public function showpengumuman($slug_pengumuman)
    {
        $read = Pengumuman_Model::findorfail($slug_pengumuman);

        $data = [
            'view' => $read->view + 1
        ];

        $read->update($data);


        return view('pages.pengumuman_detail', compact('read'));
    }



    public function testimoni()
    {
        $alumni = Alumni_Model::orderBy('id_alumni', 'desc')->paginate(8);;
        return view('pages.testimoni_alumni', compact('alumni'));
    }
    
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
    public function fasilitas()
    {
        $fasilitas=Fasilitas::all();
        return view('pages.fasilitas', compact('fasilitas'));
    }
    
}
