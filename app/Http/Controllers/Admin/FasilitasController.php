<?php

namespace App\Http\Controllers\Admin;


use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar1' => 'required|file|image|mimes:jpeg,png,jpg|max:10024',
            'gambar2' => 'required|file|image|mimes:jpeg,png,jpg|max:10024',
            'gambar3' => 'required|file|image|mimes:jpeg,png,jpg|max:10024',
            'gambar4' => 'required|file|image|mimes:jpeg,png,jpg|max:10024',
            'gambar5' => 'required|file|image|mimes:jpeg,png,jpg|max:10024',
            'gambar6' => 'required|file|image|mimes:jpeg,png,jpg|max:10024',
            'gambar8' => 'required|file|image|mimes:jpeg,png,jpg|max:10024',
        ]);

        $data = $request->all();
        $gambar1 = $request->file('gambar1');
        $new_gambar1 = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar1->GetClientOriginalName();
        $data['gambar1'] = 'images/fasilitas/' . $new_gambar1;
        $gambar1->storeAs('public/images/fasilitas', $new_gambar1);

        $gambar2 = $request->file('gambar2');
        $new_gambar2 = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar2->GetClientOriginalName();
        $data['gambar2'] = 'images/fasilitas/' . $new_gambar2;
        $gambar2->storeAs('public/images/fasilitas', $new_gambar2);

        $gambar3 = $request->file('gambar3');
        $new_gambar3 = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar3->GetClientOriginalName();
        $data['gambar3'] = 'images/fasilitas/gambar3/' . $new_gambar3;
        $gambar3->storeAs('public/images/fasilitas/gambar3', $new_gambar3);

        $gambar4 = $request->file('gambar4');
        $new_gambar4 = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar4->GetClientOriginalName();
        $data['gambar4'] = 'images/fasilitas/gambar4/' . $new_gambar4;
        $gambar4->storeAs('public/images/fasilitas/gambar4', $new_gambar4);

        $gambar5 = $request->file('gambar5');
        $new_gambar5 = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar5->GetClientOriginalName();
        $data['gambar5'] = 'images/fasilitas/gambar5/' . $new_gambar5;
        $gambar5->storeAs('public/images/fasilitas/gambar5', $new_gambar5);

        $gambar6 = $request->file('gambar6');
        $new_gambar6 = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar6->GetClientOriginalName();
        $data['gambar6'] = 'images/fasilitas/gambar6/' . $new_gambar6;
        $gambar6->storeAs('public/images/fasilitas/gambar6', $new_gambar6);

        $gambar7 = $request->file('gambar7');
        $new_gambar7 = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar7->GetClientOriginalName();
        $data['gambar7'] = 'images/fasilitas/gambar7/' . $new_gambar7;
        $gambar7->storeAs('public/images/fasilitas/gambar7', $new_gambar7);

        $gambar8 = $request->file('gambar8');
        $new_gambar8 = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar8->GetClientOriginalName();
        $data['gambar8'] = 'images/fasilitas/gambar8/' . $new_gambar8;
        $gambar8->storeAs('public/images/fasilitas/gambar8', $new_gambar8);

        Fasilitas::create($data);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilitas $fasilitas)
    {
        //
    }
}
