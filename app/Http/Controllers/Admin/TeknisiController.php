<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teknisi = Teknisi::all();
        return view('admin.teknisi.index', compact('teknisi'));
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
        $request->validate([
            'nama' => 'required|max:255',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2024',
            'jabatan' => 'required'
        ]);

        $slug_teknisi = Str::slug($request->nama, '-');

        // Upload Gambar Start
        $gambar = $request->file('gambar');

        $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $date                   = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y');
        $new_gambar             = Str::slug($filename, '-', $date) . '.' . $gambar->getClientOriginalExtension();
        $destinationPath        = 'public/images/teknisi';
        $gambar->storeAs($destinationPath, $new_gambar);
        // upload gambar end

        $data = [
            'nama_teknisi' => $request->nama,
            'slug_teknisi' => $slug_teknisi,
            'jabatan'    => $request->jabatan,
            'gambar'        => 'images/teknisi/' . $new_gambar
        ];

        Teknisi::create($data);

        return redirect()->route('teknisi.index')->with('success', 'Profile user berhasil di update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teknisi  $staff_Model
     * @return \Illuminate\Http\Response
     */
    public function show(Teknisi $teknisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff_Model  $staff_Model
     * @return \Illuminate\Http\Response
     */
    public function edit(Teknisi $teknisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teknisi  $staff_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teknisi $teknisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teknisi  $staff_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teknisi $id_teknisi)
    {
        $id_teknisi->delete();
        // Storage::delete('public/images/staff', $gambar);
        return back()->with('error', 'Data teknisi  berhasil dihapus');
    }
}
