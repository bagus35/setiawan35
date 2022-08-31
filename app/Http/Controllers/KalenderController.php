<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kalender_Model;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kalender = Kalender_Model::all();
        return view('admin.kalender_akademik.index' , compact('kalender'));
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
        $this->validate($request, [
            'judul_file' => 'required|max:255',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048'
        ]);

        
        $file = $request->file('file');
        $new_file = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $file->GetClientOriginalName();
        $data['file'] = 'file/kalender/' . $new_file;
        $file->storeAs('public/file/kalender', $new_file);
        
        Kalender_Model::create($data);

        return redirect()->route('kalender_akademik.index')->with('success', 'Kalender berhasil ditambahkan');
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
        $kalender = Kalender_Model::where('id', $id);
        $kalender->Delete();
        return redirect()->route('kalender_akademik.index')->with('error', 'Data kalender berhasil dihapus');
    }
}
