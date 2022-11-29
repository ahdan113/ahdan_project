<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Alert;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mereks = Merek::all();
        return view('admin.merek.index', [
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
        return view('admin.merek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|unique:mereks',
        ]);
        $mereks = new Merek();
        $mereks->nama = $request->nama;
        $mereks->save();
        Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect('/merek');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
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
            'nama' => 'required|unique:mereks',
        ]);
        $mereks = Merek::findOrFail($id);
        $mereks->nama = $request->nama;
        $mereks->save();
        Alert::success('Done', 'Data berhasil diedit');
        return redirect('/merek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mereks = Merek::findOrFail($id);
        $mereks->delete();
        Alert::success('Done', 'Data berhasil dihapus');
        return redirect('/merek');
    }
}
