<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magang_Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;


class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magang = Magang_Model::orderBy('id_magang', 'desc')->get();
        return view('admin.magang.index', compact('magang'));
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
            'nama_perusahaan' => 'required|max:255',
            'gambar' => 'required',
            'alamat' => 'required'
        ]);

        $data = $request->all();
        $gambar = $request->file('gambar');
        $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();

        $gambar->storeAs('public/images/magang', $new_gambar);

        $data['gambar'] = 'images/magang/' . $new_gambar;

        Magang_Model::create($data);

        return redirect()->route('magang.index')->with('success', 'Data magang berhasil ditambahkan');
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
    public function edit($id_magang)
    {
        $id_magang = Crypt::decrypt($id_magang);
        $magang = Magang_Model::findorfail($id_magang);
        return view('admin.magang.edit', compact('magang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magang_Model $id_magang)
    {
        $this->validate($request, [
            'gambar'            => 'file|mimes:png,jpg|max:2024',
            'nama_perusahaan'       => 'required',
            'alamat'     => 'required',
        ]);

        $gambar = $request->file('gambar');

        if (!empty($gambar)) {
            $data = $request->all();
            $gambar = $request->file('gambar');
            $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->GetClientOriginalName();
            $data['gambar'] = 'images/magang/' . $new_gambar;
            $gambar->storeAs('public/images/magang', $new_gambar);
            $id_magang->update($data);
        } else {
            $data = $request->all();
            $id_magang->update($data);
        }

        return redirect()->route('magang.index')->with('success', 'Data magang berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magang_Model $id_magang)
    {
        $filename = $id_magang->gambar;
        Storage::disk('public')->delete($filename);
        $id_magang->delete();
        return redirect()->route('magang.index')->with('success', 'Data Magang berhasil dihapus');
    }
}