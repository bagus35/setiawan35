<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman_model;
use App\Models\Staff_Model;
use App\Models\Event_Model;
use App\Models\Fasilitas;
use App\Models\Teknisi;
use App\Models\Magang_Model;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $user       = User::count();
        $staff      = Staff_Model::count();
        $teknisi     = Teknisi::count();
        $event     = Event_Model::count();
        $magang     = Magang_Model::count();
        $takeuser = User::orderBy('id', 'desc')->take(3)->get();
    

        $data = [
            'title' => 'Politeknik Negeri Banyuwangi',
            'username' => 'POLIWANGI',
            'jumlah_dosen' => '20'
        ];
        return view('admin.index', compact('data', 'user', 'staff',   'takeuser', 'magang','teknisi','event', ));
    }
}
