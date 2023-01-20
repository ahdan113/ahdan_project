<?php

namespace App\Http\Controllers;
use Alert;
use App\Models\Tas;
use App\Models\Merek;
use Illuminate\Http\Request;
use Validator;

class TasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tas.index', [
            'Tas' => Tas::latest()->get(),
            'mereks' => Merek::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tas.create', [
            'mereks' => Merek::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'id_merek' => 'required',
            'foto' => 'required|image',
            'warna' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'link' => 'required',
        ];

        $messages = [
            'id_merek.required' => 'Merek Harus Diisi!',
            'foto.required' => 'foto harus di isi!',
            'foto.image' => 'Foto harus berjenis jpg & png!',
            'warna.required' => 'Deskripsi harus di isi!',
            'deskripsi.required' => 'Deskripsi harus di isi!',
            'harga.required' => 'Harga harus di isi!',
            'link.required' => 'Harga harus di isi!',
        ];

        $validation = Validator::make($request->all(), $rules, $messages);
        if ($validation->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }

        $tas = new Tas();
        $tas->id_merek = $request->id_merek;
        if ($image = $request->file('foto')) {
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/tas/', $name);
            $tas->foto = $name;
        }
        $tas->warna = $request->warna;
        $tas->deskripsi = $request->deskripsi;
        $tas->harga = $request->harga;
        $tas->link = $request->link;
        
        $tas->save();
        Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('tas.index');

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
        $validated = $request->validate([
            ' ' => 'required|unique:tas',
        ]);
        $tas = Tas::findOrFail($id);
        $tas->id_merek = $request->id_merek;
        if ($image = $request->file('foto')) {
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/tas/', $name);
            $tas->foto = $name;
        }
        $tas->warna = $request->warna;
        $tas->deskripsi = $request->deskripsi;
        $tas->harga = $request->harga;
        $tas->link = $request->link;
        $tas->save();
        Alert::success('Done', 'Data berhasil diedit');
        return redirect('/tas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tas = Tas::findOrFail($id);
        $tas->delete();
        Alert::success('Done', 'Data berhasil dihapus');
        return redirect('/tas');
    }
}
